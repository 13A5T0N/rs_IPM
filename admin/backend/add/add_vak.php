<?php
include "../../../config/db_conn.php";
session_start();

function insert_vak($naam,$afkorting,$conn,$jaar,$richting){
    $sql = "INSERT INTO `vak`( `vak_naam`, `vak_afkorting`, `vak_jaar`, `vak_richting`)
    VALUES ('$naam','$afkorting',$jaar,$richting)";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw richting toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

// echo  password_hash("student123", PASSWORD_BCRYPT);
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$afkorting = mysqli_real_escape_string($conn,$_POST['afkoritng']);
$jaar = mysqli_real_escape_string($conn,$_POST['jaar']);
$richting = mysqli_real_escape_string($conn,$_POST['richting']);

insert_vak($naam,$afkorting,$conn,$jaar,$richting);
header("location:../../view/vakken.php");