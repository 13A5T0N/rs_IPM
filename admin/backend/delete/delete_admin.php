<?php
include "../../../config/db_conn.php";
session_start();

$id = filter_var(mysqli_real_escape_string($conn, $_POST['delete_id']), FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM `admin` WHERE admin_id = $id";

if ($conn->query($sql) === TRUE) {
} else {
    $_SESSION['error'] = $conn->error;
}

header("location:../../view/admin.php");