<?php
include "../../../config/db_conn.php";
if (isset($_POST['id'])) {
    
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $sql = "select * from document where document_id = '$id'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    echo json_encode($row);
}
?>