<?php
include "../../config/db_conn.php";
if (isset($_POST['id'])) {
    
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $sql = "select klas_id, klas_naam, richting_afkorting, klas_jaar , richting_id
    from klassen, richting where richting.richting_id = klassen.klas_richting and klas_id = '$id'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    echo json_encode($row);
}
?>