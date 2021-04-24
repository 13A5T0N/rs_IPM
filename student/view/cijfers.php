<?php include "../includes/menubar_stud.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Cijfers Tabel</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        klas
                                    </th>
                                    <th>
                                        vak
                                    </th>
                                    <th>
                                        uploaded
                                    </th>

                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from cijfers_klas, klassen, vak where cijfers_klas.cf_klas=klassen.klas_id";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['cf_kl']; ?></td>
                                                <td><?php echo $row['klas_naam']; ?></td>
                                                <td><?php echo $row['vak_afkorting']; ?></td>

                                                <td>
                                                    <a href="../../docs/<?php echo $row['document_path']; ?>" target="blank"><i class="material-icons">visibility</i></a>

                                                    
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