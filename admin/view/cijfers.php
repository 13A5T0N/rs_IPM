<?php include "../includes/menubar.php";
include "../includes/errors.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title text-uppercase font-weight-bold space">Cijfers Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#add">
                                Cijfers Toevoegen
                            </button></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Klas
                                    </th>
                                    <th>
                                        Vak
                                    </th>
                                    <th>
                                        Richting
                                    </th>
                                    <th>
                                        Periode
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select cf_kl,klas_naam, cf_periode, vak_naam, richting_afkorting 
                                    from cijfers_klas,klassen,vak,richting
                                    where cijfers_klas.cf_klas = klassen.klas_id and cijfers_klas.cf_vak = vak.vak_id and klassen.klas_richting = richting.richting_id group by  cf_kl desc
                                    ";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['cf_kl']; ?></td>
                                                <td><?php echo $row['klas_naam']; ?></td>
                                                <td><?php echo $row['vak_naam']; ?></td>
                                                <td><?php echo $row['richting_afkorting']; ?></td>
                                                <td><?php echo $row['cf_periode']; ?></td>

                                                <td> <a href="../../docs/<?php echo $row['document_path']; ?>" target="blank"><i class="material-icons">launch</i></a>
                                                    <a href="#" class="delete" data-id="<?php echo $row['document_id']; ?>"><i class="material-icons text-danger">delete</i></a>
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