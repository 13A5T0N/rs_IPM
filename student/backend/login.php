<?php
ob_start();
session_start();
include "../../config/db_conn.php";;

   if(!empty($_POST['qrcode']))
   {
     $qrcode = $_POST ['qrcode'];
     $arr = explode('|', $qrcode);

     $username = $arr[1];
     $pass = $arr[2];

     $sql = "SELECT * FROM studenten WHERE student_naam = '$username' AND student_password = '$pass'";

     $resultSQL = mysqli_query($conn, $sql);

     $result = mysqli_fetch_array($resultSQL);

     if(mysqli_num_rows($resultSQL) > 0)
     {
       $_SESSION['student_naam'] = $result['student_naam'];
       

       header("location:../view/index_stud.php");
       ob_end_flush();
     }
     
   }

?>