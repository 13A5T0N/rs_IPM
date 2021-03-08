
<?php
include "../../../config/db_conn.php";
session_start();


function update_info($conn, $richting, $naam,$jaar, $afkorting,$id)
{
    $sql = "UPDATE `vak` SET `vak_naam`= '$naam',`vak_afkorting`= '$afkorting',
    `vak_jaar`= $jaar,`vak_richting`= $richting WHERE `vak_id` = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success'] = 'vak bewerkt';
    } else {
        $_SESSION['error'] = $conn->error;
    }
}


$id = filter_var(mysqli_real_escape_string($conn, $_POST['edit_id']), FILTER_SANITIZE_NUMBER_INT);
$naam = mysqli_real_escape_string($conn,$_POST['naam']);
$afkorting = mysqli_real_escape_string($conn,$_POST['afkoritng']);
$jaar =  filter_var(mysqli_real_escape_string($conn, $_POST['jaar']), FILTER_SANITIZE_NUMBER_INT);
$richting = filter_var(mysqli_real_escape_string($conn, $_POST['richting']), FILTER_SANITIZE_NUMBER_INT);

update_info($conn, $richting, $naam,$jaar, $afkorting,$id);

header("location:../../view/vakken.php?status=27");