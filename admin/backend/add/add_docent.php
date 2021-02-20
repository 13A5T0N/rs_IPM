<?php
include "../../../config/db_conn.php";
session_start();

function insert_data($voornaam,$naam,$email,$conn,$tel){
    $sql = "INSERT INTO `docenten`(`docent_voornaam`, `docent_naam`,  `docent_tel`, `docent_email`)
    VALUES ('$voornaam','$naam', '$tel','$email')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw admin account toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

// function get_last_id($conn){
// }

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
$tel = mysqli_real_escape_string($conn,$_POST['tel']);

insert_data($voornaam,$naam,$email,$conn,$tel);

header("location:../../view/docenten.php");
