<?php
include "../../../config/db_conn.php";
if (isset($_POST['id'])) {
    
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $sql = "SELECT * FROM docenten where docent_id = '$id'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    echo json_encode($row);
}
?>