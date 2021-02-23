<?php
include "../../../config/db_conn.php";
session_start();
function update_info($conn, $voornaam, $naam, $tel, $email, $id)
{
    $sql = "UPDATE docenten SET docent_voornaam='$voornaam' , docent_naam='$naam',
    docent_tel= '$tel' , docent_email= '$email' WHERE `docent_id`= $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Docent account bewerkt';
    } else {
        $_SESSION['error'] = $conn->error;
        echo $conn->error;
    }
}



$id = filter_var(mysqli_real_escape_string($conn, $_POST['edit_id']), FILTER_SANITIZE_NUMBER_INT);
$file = $_FILES["filename"]["name"];
$naam = mysqli_real_escape_string($conn, $_POST['naam']);
$tarief = mysqli_real_escape_string($conn, $_POST['tarief']);

if (!empty($file)) {
    echo 'file found';
} else {
    echo 'no file';
}
// update_info($conn, $voornaam, $naam, $tel, $email, $id);


// header("location:../../view/docenten.php");