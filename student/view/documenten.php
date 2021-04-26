<?php include "../includes/menubar_stud.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Documenten</h4>
                        <p class="card-category">documenten overzicht</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        naam
                                    </th>
                                    <th>
                                        tarief
                                    </th>
                                    <th>
                                        uploaded
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
                                                <td><?php echo $row['document_tarief']; ?></td>
                                                <td>
                                                    <a href="../../docs/<?php echo $row['document_path']; ?>" target="blank"><i class="material-icons">launch</i></a>
                                                    <!-- saldo berekening ga je verder?
                                                                            $sql = "SELECT  * FROM studenten, document ";
                                                                            if ($conn->query($sql) === TRUE) {
                                                                                echo $row['document_path'];
                                                                                $tarief = $row['document_tarief'];
                                                                                $saldo = $row['student_saldo'];
                                                                                $substract = ($saldo - $tarief);
                                                                                $sql1 = "INSERT INTO `studenten` (student_saldo) VALUES ($substract)";
                                                                            } else {
                                                                            } -->
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