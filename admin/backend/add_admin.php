<?php
include "../../config/db_conn.php";
session_start();

$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$voornaam = mysqli_real_escape_string($conn,$_POST['voornaam']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

$sql = "INSERT INTO `admin`(`admin_voornaam`, `admin_naam`, `admin_email`) 
VALUES ('$voornaam','$naam','$email')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['success'] = 'Nieuw admin account toegevoegd';
} else {
    $_SESSION['error'] = $conn->error;
}
header("location:../view/admin.php");
$conn->close();