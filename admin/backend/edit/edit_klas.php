<?php
include "../../../config/db_conn.php";
session_start();


function update_info($conn, $richting, $naam,$jaar,$id)
{
    $sql = "UPDATE `klassen` SET `klas_naam`= '$naam',
    `klas_jaar`= $jaar,`klas_richting`= $richting WHERE `klas_id` = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'vak bewerkt';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}


$id = filter_var(mysqli_real_escape_string($conn, $_POST['edit_id']), FILTER_SANITIZE_NUMBER_INT);
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$jaar =  filter_var(mysqli_real_escape_string($conn, $_POST['jaar']), FILTER_SANITIZE_NUMBER_INT);
$richting = filter_var(mysqli_real_escape_string($conn, $_POST['richting']), FILTER_SANITIZE_NUMBER_INT);

update_info($conn, $richting, $naam,$jaar,$id);

header("location:../../view/klassen.php");