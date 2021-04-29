<?php
ob_start();
session_start();
include "../../config/db_conn.php";;

   if(!empty($_POST['qrcode']))
   {
     $qrcode = $_POST ['qrcode'];
     $arr = explode('|', $qrcode);

     //$username = $arr[1];
     //$pass = $arr[2];
     $email = $arr[1];

     $sql = "SELECT * FROM studenten WHERE student_email = '$email'";

     $resultSQL = mysqli_query($conn, $sql);

     $result = mysqli_fetch_array($resultSQL);

     if(mysqli_num_rows($resultSQL) > 0)
     {
       $_SESSION['student_nr'] = $result['student_nr'];
       

       header("location:../view/index_stud.php");
       ob_end_flush();
     }
     
   }

?>