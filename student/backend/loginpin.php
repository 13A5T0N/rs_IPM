<?php
include "../../config/db_conn.php";
session_start();
function get_student($conn, $email)
{
    $sql = "SELECT * FROM studenten where student_email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
    {
        // output data of each row
        while ($row = $result->fetch_assoc()) 
        {
            $pwd = $row["student_password"]; 
            $user = $row["student_nr"];
            $status = 1;
        }
    } 
    else {
        $status = 0;
         }

    return array($status,$pwd,$user);
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['password']);


$status = get_student($conn, $email)[0];
$password = get_student($conn, $email)[1];
$user = get_student($conn, $email)[2];

if ($status == 0) 
{
    header("location:../log_in.php?status=0");
} 

else 

{
    
        if (password_verify($pwd, $password)) 
        {
            $_SESSION["user"] = $user;
            
            if($pwd == 'student123')
            {
                header("location:../reset2.php?status=0");
            }
               else 
               {
                header("location:../view/admin.php?status=1");
               }
        } 
                   else 
                   {
                     header("location:../log_in.php?status=0");
                   }
                     
}
