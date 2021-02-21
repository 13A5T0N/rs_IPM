<?php
include "../../config/db_conn.php";
session_start();

function insert_richting($naam,$afkorting,$conn){
    $sql = "INSERT INTO `richting`( `richting_naam`, `richting_afkorting`)
    VALUES ('$naam','$afkorting')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw richting toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

// echo  password_hash("student123", PASSWORD_BCRYPT);
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$afkorting = mysqli_real_escape_string($conn,$_POST['afkoritng']);

insert_richting($naam,$afkorting,$conn);
header("location:../view/richtingen.php");