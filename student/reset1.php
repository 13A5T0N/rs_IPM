<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "ipm";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$pwd = mysqli_real_escape_string($conn, $_POST['password']);
$new = mysqli_real_escape_string($conn, $_POST['new_pwd']);

$hash = password_hash($new, PASSWORD_DEFAULT);

if ($pwd == $new) {
    $sql = "UPDATE `studenten` SET `student_password`='$hash' WHERE student_nr =".$_SESSION["user"]." ";
    if ($conn->query($sql) === TRUE) {
        header("location:../student/view/index_stud.php?status=2");
    } else {
        header("location:../../RS_IPM/student/reset2.php?status=4");
    }
} else {
    header("location:../../RS_IPM/student/reset2.php?status=3");
}