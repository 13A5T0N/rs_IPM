<?php
include "../../../config/db_conn.php";
session_start();


function update_info($conn, $voornaam, $naam, $leeftijd,$woon,$tel, $email,$emergency_naam,$emergency_relatie,$emergency_nummer,$emergency_email, $id)
{
    $sql = "UPDATE `studenten` SET `student_voornaam`= '$voornaam',`student_naam`='$naam' ,
    `student_leeftijd`= $leeftijd,`student_adres`='$woon',`student_tel`= '$tel',
    `student_email`= '$email',`student_emergency_contact`='$emergency_naam',
    `student_emergency_relatie`='$emergency_relatie',`student_emergency_nummer`='$emergency_nummer',
    `student_emergency_email`='$emergency_email' WHERE student_nr = $id";

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
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$voornaam = mysqli_real_escape_string($conn,$_POST['voornaam']);
$leeftijd = filter_var(mysqli_real_escape_string($conn,$_POST['leeftijd']), FILTER_SANITIZE_NUMBER_INT);
$woon = mysqli_real_escape_string($conn,$_POST['woon']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$tel = filter_var(mysqli_real_escape_string($conn,$_POST['tel']), FILTER_SANITIZE_NUMBER_INT);
$emergency_naam = mysqli_real_escape_string($conn,$_POST['emergency_naam']);
$emergency_relatie = mysqli_real_escape_string($conn,$_POST['emergency_relatie']);
$emergency_nummer = filter_var(mysqli_real_escape_string($conn,$_POST['emergency_nummer']), FILTER_SANITIZE_NUMBER_INT);
$emergency_email = mysqli_real_escape_string($conn,$_POST['emergency_email']);


update_info($conn, $voornaam, $naam, $leeftijd,$woon,$tel, $email,$emergency_naam,$emergency_relatie,$emergency_nummer,$emergency_email, $id);
// if ($reset = 1) {
//     update_info($conn, $voornaam, $naam, $status, $email, $id);
//     update_pwd($conn,$id);
// } else {
//     update_info($conn, $voornaam, $naam, $status, $email, $id);
//     update_pwd($conn,$id);
// }

header("location:../../view/studenten.php");