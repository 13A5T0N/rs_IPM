<?php
include "../../../config/db_conn.php";
session_start();


if (isset($_POST['add'])) {
    $id = filter_var(mysqli_real_escape_string($conn, $_POST['money_id']), FILTER_SANITIZE_NUMBER_INT);
    $sql = "SELECT student_saldo FROM studenten WHERE student_nr=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $saldo = $row["student_saldo"];
            $z = mysqli_real_escape_string($conn, $_POST['amount']);
            $som = $saldo + $z;
        }
        $sql1 = "UPDATE studenten  set  student_saldo=$som WHERE student_nr=$id";
        $result = mysqli_query($conn, $sql1);

        if (mysqli_multi_query($conn, $sql1)) {
            echo "New records created successfully";
        }
    } else {
        echo "0 results";
    }

    header("location:../../view/studenten.php?status=9");
}
