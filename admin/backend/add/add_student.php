<?php
include "../../../config/db_conn.php";
session_start();

function insert_student($naam,$voornaam,$leeftijd,$woon,$email,$tel,$emergency_naam,$emergency_relatie,$emergency_nummer,$emergency_email,$conn){
    $sql = "INSERT INTO `studenten`(student_adres,student_tel,`student_voornaam`, `student_naam`, `student_leeftijd`, `student_email`, `student_emergency_contact`, `student_emergency_relatie`, `student_emergency_nummer`, `student_emergency_email`) 
    VALUES ('$woon','$tel', '$voornaam','$naam',$leeftijd,'$email','$emergency_naam','$emergency_relatie','$emergency_nummer','$emergency_email')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Nieuw admin account toegevoegd';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}

// echo  password_hash("student123", PASSWORD_BCRYPT);
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

insert_student($naam,$voornaam,$leeftijd,$woon,$email,$tel,$emergency_naam,$emergency_relatie,$emergency_nummer,$emergency_email,$conn);

header("location:../../view/studenten.php?status=6");