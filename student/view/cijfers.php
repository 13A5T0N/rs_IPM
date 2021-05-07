<?php include "../includes/menubar_stud.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title2 text-uppercase font-weight-bold space">Cijfers Tabel</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                    <th>
                                        Klas
                                    </th>
                                    <th>
                                        Vak
                                    </th>
                                    <th>
                                        Bekijken
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from cijfers_klas, klassen, vak,klas_formatie, klassen_formaties
                                    where cijfers_klas.cf_klas=klassen.klas_id 
                                    and klas_formatie.formatie_klas = klassen.klas_id
                                    and  klas_formatie.formatie_id = klassen_formaties.formatie_id
                                    and klf_stud = 2";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['klas_naam']; ?></td>
                                                <td><?php echo $row['vak_afkorting']; ?></td>

                                                <td>
                                                    <a href="cijfer_overzicht.php?klas=<?php echo $row['cf_kl']; ?>" target="blank"><i class="material-icons">visibility</i></a>
                                                </td>
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