<?php
include "../../config/db_conn.php";
session_start();
function get_admin($conn, $email)
{
    $sql = "SELECT * FROM admin where admin_email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $pwd = $row["admin_pwd"]; 
            $account_status = $row["admin_status"];
            $user = $row["admin_id"];
            $status = 1;
        }
    } else {
        $status = 0;
    }

    return array($status, $account_status, $pwd,$user);
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['password']);


$status = get_admin($conn, $email)[0];
$account = get_admin($conn, $email)[1];
$password = get_admin($conn, $email)[2];
$user = get_admin($conn, $email)[3];

if ($status == 0) {
    header("location:../../index.php?status=0");
} else {
    if ($account == 'actief') {
        if (password_verify($pwd, $password)) {
            $_SESSION["user"] = $user;
            if($pwd == 'admin123'){
                header("location:../../reset.php?status=0");
            }else {
                header("location:../view/index.php?status=1");
            }
        } else {
            header("location:../../index.php?status=0");
        }
    } else {
        header("location:../../index.php?status=1");
    }
}
