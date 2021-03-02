<?php
include "../../../config/db_conn.php";
session_start();
function update_info($conn, $voornaam, $naam, $status, $email, $id)
{
    $sql = "UPDATE admin SET admin_voornaam='$voornaam' ,admin_naam='$naam',
    admin_status= '$status' , admin_email= '$email' WHERE `admin_id`= $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'admin account bewerkt';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

function update_pwd($conn,$id)
{
    $sql = 'UPDATE admin SET  admin_pwd= "$argon2i$v=19$m=65536,t=4,p=1$eGdsWW5GZElVSE83ZmpYaw$Hq/kEc+fRfCfzWwjrWXI40hu04P2BQT0neU86OW3wKo" WHERE admin_id= '.$id.'';

    if ($conn->query($sql) === TRUE) {
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

$id = filter_var(mysqli_real_escape_string($conn, $_POST['edit_id']), FILTER_SANITIZE_NUMBER_INT);
$naam = mysqli_real_escape_string($conn, $_POST['naam']);
$voornaam = mysqli_real_escape_string($conn, $_POST['voornaam']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$status = mysqli_real_escape_string($conn, $_POST['status']);
$reset = filter_var(mysqli_real_escape_string($conn, $_POST['password']), FILTER_SANITIZE_NUMBER_INT);

if ($reset = 1) {
    update_info($conn, $voornaam, $naam, $status, $email, $id);
    update_pwd($conn,$id);
} else {
    update_info($conn, $voornaam, $naam, $status, $email, $id);
}

header("location:../../view/admin.php?status=4");