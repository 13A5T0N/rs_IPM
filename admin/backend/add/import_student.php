<?php
include "../../../config/db_conn.php";
session_start();
$filename = $_FILES["filename"]["name"];
// check file extension
$ext = substr($filename, strrpos($filename, "."), (strlen($filename) - strrpos($filename, ".")));
if (move_uploaded_file($_FILES["filename"]["tmp_name"], '../../../docs/' . $filename)) {
    if ($ext == ".csv") {
        $file = fopen('../../../docs/' . $filename, "r");
        fgetcsv($file);
        $count = 0;
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            if ($emapData[1] == NULL) {
            } else {
                $count++;
                $sql = "INSERT INTO `studenten`(student_adres,student_tel,`student_voornaam`, `student_naam`, `student_leeftijd`, `student_email`, `student_emergency_contact`, `student_emergency_relatie`, `student_emergency_nummer`, `student_emergency_email`) 
                        VALUES ('$emapData[5]','$emapData[4]', '$emapData[1]','$emapData[0]',$emapData[2],'$emapData[3]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]')";
               $conn->query($sql);
            }
        }
        fclose($file);
    } else {
         echo "upload csv document";
         unlink('../../../docs/' . $filename);
    }
} else {
    echo "error uploading";
}
header("location:../../view/studenten.php?status=7");