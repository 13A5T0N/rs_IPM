<?php
include "../../../config/db_conn.php";
session_start();

$file = $_FILES["filename"]["name"];
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$tarief = mysqli_real_escape_string($conn,$_POST['tarief']);

if (move_uploaded_file($_FILES["filename"]["tmp_name"], '../../../docs/' . $file)){
    $sql = "INSERT INTO `document`(document_naam,document_tarief,document_path) 
    VALUES ('$naam','$tarief','$file')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw document toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}else {
    echo "failed";
}

header("location:../../view/documenten.php?status=14");