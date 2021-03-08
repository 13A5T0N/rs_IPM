<?php
include "../../../config/db_conn.php";
session_start();
$filename = $_FILES["filename"]["name"];

function create_formatie($conn, $id, $emapData)
{
    $sql = "INSERT INTO `klas_formatie`( `formatie_klas`, `formatie_schooljaar`) VALUES ($id,'$emapData[4]')";
     $conn->query($sql);
}

function check_formatie($conn, $id, $emapData)
{
    $sql = "SELECT formatie_id FROM klas_formatie where formatie_klas = $id and formatie_schooljaar = '$emapData[4]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fm_id = $row['formatie_id'];
        }
    } else {
        $fm_id = 'false';
    }

    return $fm_id;
}

function insert_formatie($conn,$fm_id,$emapData)
{
    $sql = "INSERT INTO `klassen_formaties`(`klf_formatie`, `klf_stud`) VALUES ($fm_id , $emapData[0])";
    if ($conn->query($sql) === TRUE) {
        echo $sql;
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
                    $fm_id = check_formatie($conn, $id, $emapData);
                     
                    if($fm_id == 'false'){
                        create_formatie($conn, $id, $emapData); 
                        $fm_id = check_formatie($conn, $id, $emapData);   
                        insert_formatie($conn,$fm_id,$emapData);
                    }else{
                        insert_formatie($conn,$fm_id,$emapData);
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
header("location:../../view/formaties.php?status=24");