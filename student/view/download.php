<?php
include "../../config/db_conn.php";
// include_once "../includes/menubar_stud.php";
session_start();



if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT  * FROM studenten, document WHERE student_nr = '" . $_SESSION["student_nr"] . "' AND document_id = $id";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $saldo = $row["student_saldo"];
            $doc = $row["document_tarief"];
            $substract = $saldo - $doc;
            echo $substract;
        }
        $sql1 = "UPDATE studenten  set  student_saldo=$substract  WHERE student_nr = '" . $_SESSION["student_nr"] . "'";
        $result = mysqli_query($conn, $sql1);
    }
    // echo $_SESSION["user"];
}

if (isset($_GET['file'])) {

    //Read the filename
    $filename = $_GET['file'];
    //Check the file exists or not
    if (file_exists($filename)) {

        //Define header information
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: 0");
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));
        header('Pragma: public');

        //Clear system output buffer
        flush();

        //Read the size of the file
        readfile($filename);

        //Terminate from the script
        die();
    } else {
        echo "File does not exist.";
    }
} else
    echo "Filename is not defined.";
