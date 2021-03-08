<?php
include "../../../config/db_conn.php";
if (isset($_POST['id'])) {
    
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $sql = "select vak_id, vak_naam, vak_afkorting, richting_afkorting, vak_jaar,vak_richting
    from vak, richting where vak.vak_richting = richting.richting_id and vak_id =  '$id'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    echo json_encode($row);
}
?>