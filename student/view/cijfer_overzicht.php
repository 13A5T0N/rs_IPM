<?php include "../includes/session.php";
include "../../config/db_conn.php";
$klas = $_GET["klas"];
function get_vak($conn, $klas)
{
    $sql = "select * from cijfers_klas, klassen, vak where cijfers_klas.cf_klas=klassen.klas_id and cf_kl = $klas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $return = $row["vak_naam"];
        }
    } else {
      
    }

    return $return;
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title2 text-uppercase font-weight-bold space">Vak: <?php echo get_vak($conn, $klas)?> </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                    <th>
                                        student
                                    </th>
                                    <th>
                                        Cijfer
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from cijfers_klas,cijfers_student,studenten where cijfers_student.cf_klas = cijfers_klas.cf_kl and
                                    cijfers_student.cf_student = studenten.student_nr
                                    and cf_kl = 1";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['student_voornaam']." ".$row['student_naam']; ?></td>
                                                <td><?php echo $row['cf_cijfer']; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../includes/scripts.php";
    include "../modals/cijfers_modal.php"; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var element = document.getElementById("cijferlijst");
            element.classList.add("active");
        });
    </script>