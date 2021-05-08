<?php
include_once "../includes/menubar_stud.php";
// include "download.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="text-uppercase font-weight-bold space">Documenten</h4>
                        <p class="card-category">Documenten overzicht</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Naam
                                    </th>
                                    <th>
                                        Tarief
                                    </th>
                                    <th>
                                        Downloaden
                                    </th>
                                    <!-- <th>
                                        Acties
                                    </th> -->
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM document";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['document_id']; ?></td>
                                                <td><?php echo $row['document_naam']; ?></td>
                                                <td><?php echo $doc = $row['document_tarief']; ?></td>
                                                <td>



                                                    <a href="download.php?id=<?php echo $row['document_id']; ?>&file=../../docs/<?php echo $row['document_path']; ?>" target="blank"><i type="button" name="btn-atc" class="material-icons">download</i></a>

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
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            var element = document.getElementById("documenten");
            element.classList.add("active");
        });
    </script>
    <?php include "../includes/scripts.php"; ?>