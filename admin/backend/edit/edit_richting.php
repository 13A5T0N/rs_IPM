<?php
include "../../../config/db_conn.php";
session_start();
function update_info($conn, $afkoritng,$naam,$id)
{
    $sql = "UPDATE richting SET richting_naam='$naam',
    richting_afkorting = '$afkoritng' WHERE `richting_id`= $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'Docent account bewerkt';
    } else {
        $_SESSION['error'] = $conn->error;
        echo $conn->error;
    }
}



$id = filter_var(mysqli_real_escape_string($conn, $_POST['edit_id']), FILTER_SANITIZE_NUMBER_INT);
$naam = mysqli_real_escape_string($conn, $_POST['naam']);
$afkoritng = mysqli_real_escape_string($conn, $_POST['afkoritng']);



update_info($conn, $afkoritng,$naam,$id);


header("location:../../view/richtingen.php");