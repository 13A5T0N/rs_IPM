<?php
include "../../../config/db_conn.php";
session_start();

$file = $_FILES["filename"]["name"];
$richting = mysqli_real_escape_string($conn, $_POST['richting']);
$periode = mysqli_real_escape_string($conn, $_POST['periode']);
$start = mysqli_real_escape_string($conn, $_POST['start']);
$eind = mysqli_real_escape_string($conn, $_POST['eind']);

if (move_uploaded_file($_FILES["filename"]["tmp_name"], '../../../docs/' . $file)) {
    $sql = "INSERT INTO `rooster`(`rooster_richting`,`rooster_periode`,`rooster_start`, `rooster_eind`, `rooster_path`) 
    VALUES ($richting,'$periode','$start','$eind','$file')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw Rooster toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    $_SESSION['error'] = "File upload mislukt";
}

header("location:../../view/rooster.php?status=16");
