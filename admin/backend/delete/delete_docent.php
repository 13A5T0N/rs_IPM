<?php
include "../../../config/db_conn.php";
session_start();

$id = filter_var(mysqli_real_escape_string($conn, $_POST['delete_id']), FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM `docenten` WHERE docent_id = $id";

if ($conn->query($sql) === TRUE) {
} else {
    $_SESSION['error'] = $conn->error;
    echo $conn->error;
}

header("location:../../view/docenten.php?status=12");