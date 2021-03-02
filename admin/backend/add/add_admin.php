<?php
include "../../../config/db_conn.php";
session_start();

function insert_data($voornaam,$naam,$email,$conn){
    $sql = "INSERT INTO `admin`(`admin_voornaam`, `admin_naam`, `admin_email`) 
    VALUES ('$voornaam','$naam','$email')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw admin account toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

function get_last_id($conn){
}

function insert_log($conn){
    $sql = "INSERT INTO `admin`(`admin_voornaam`, `admin_naam`, `admin_email`) 
    VALUES ()";
    if ($conn->query($sql) === TRUE) {
        
    } else {
        $_SESSION['error'] = $conn->error;
    }
    $conn->close();
}

$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$voornaam = mysqli_real_escape_string($conn,$_POST['voornaam']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

insert_data($voornaam,$naam,$email,$conn);

header("location:../../view/admin.php?status=3");
