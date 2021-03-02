<?php
session_start();

include "../../config/db_conn.php";
$pwd = mysqli_real_escape_string($conn, $_POST['password']);
$new = mysqli_real_escape_string($conn, $_POST['new_pwd']);
$hash = password_hash($new, PASSWORD_DEFAULT);

if ($pwd == $new) {
    $sql = "UPDATE `admin` SET `admin_pwd`='$hash' WHERE admin_id =".$_SESSION["user"]." ";
    if ($conn->query($sql) === TRUE) {
        header("location:../view/index.php?status=2");
    } else {
        header("location:../../reset.php?status=4");
    }
} else {
    header("location:../../reset.php?status=3");
}
