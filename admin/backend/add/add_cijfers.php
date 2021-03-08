<?php
include "../../../config/db_conn.php";
session_start();
$filename = $_FILES["filename"]["name"];

function get_vak($conn,$emapData){
    $sql = "SELECT vak_id FROM vak where  vak_afkorting = '$emapData[5]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $vak = $row['vak_id'];
        }
    } else {
        $vak = 'false';
    }

    return $vak;
}

function create_klas_cijfer($conn, $id,$vak, $emapData)
{
    $sql = "INSERT INTO `cijfers_klas` (`cf_klas`, `cf_vak`, `cf_periode`) VALUES ($id, $vak, $emapData[4])";
    $conn->query($sql);
}

function check_klas_cijfer($conn, $id, $emapData)
{
    $sql = "SELECT cf_kl FROM cijfers_klas where cf_klas = $id and cf_periode = $emapData[4]";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fm_id = $row['cf_kl'];
        }
    } else {
        $fm_id = 'false';
    }

    return $fm_id;
}

function insert_cijfers($conn, $fm_id, $emapData)
{
    $sql = "INSERT INTO `cijfers_student`(`cf_klas`, `cf_student`, `cf_cijfer`) VALUES ($fm_id , $emapData[0],'$emapData[6]')";
    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// check file extension
$ext = substr($filename, strrpos($filename, "."), (strlen($filename) - strrpos($filename, ".")));
if (move_uploaded_file($_FILES["filename"]["tmp_name"], '../../../docs/' . $filename)) {
    if ($ext == ".csv") {
        $file = fopen('../../../docs/' . $filename, "r");
        fgetcsv($file);
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            if ($emapData[1] == NULL) {
            } else {

                $sql = "SELECT klas_id FROM klassen where klas_naam = '$emapData[3]'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $id = $row["klas_id"];
                    }
                    $fm_id = check_klas_cijfer($conn, $id, $emapData);
                    $vak = get_vak($conn,$emapData);
                    echo '<br>';
                    if($fm_id == 'false'){
                        create_klas_cijfer($conn, $id,$vak, $emapData); 
                        $fm_id = check_klas_cijfer($conn, $id, $emapData);  
                        insert_cijfers($conn, $fm_id, $emapData);
                    }else{
                        insert_cijfers($conn, $fm_id, $emapData);
                    }

                } else {
                    echo $conn->query($sql);
                }
            }
        }
        fclose($file);
    } else {
        echo "upload csv document";
    }
} else {
    echo "error uploading";
}
unlink('../../../docs/'.$filename);
header("location:../../view/cijfers.php?status=13");