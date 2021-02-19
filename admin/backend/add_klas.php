<?php
include "../../config/db_conn.php";
session_start();

function insert_klas($naam,$conn,$jaar,$richting){
    $sql = "INSERT INTO `klassen`( `klas_naam`, `klas_richting`, `klas_jaar`)
    VALUES ('$naam',$richting,$jaar)";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw richting toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

// echo  password_hash("student123", PASSWORD_BCRYPT);
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$jaar = mysqli_real_escape_string($conn,$_POST['jaar']);
$richting = mysqli_real_escape_string($conn,$_POST['richting']);

insert_klas($naam,$conn,$jaar,$richting);
header("location:../view/klassen.php");