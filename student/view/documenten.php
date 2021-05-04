<?php include "../includes/menubar_stud.php"; ?>
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

                                                    <?php

                                                    if (isset($_POST['btn-atc'])) {
                                                        $sql = "SELECT  * FROM studenten, document WHERE student_nr = '" . $_SESSION["user"] . "'";
                                                        $result = mysqli_query($conn, $sql);

                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $saldo = $row["student_saldo"];
                                                                $substract = $saldo - $doc;
                                                            }
                                                            $sql1 = "UPDATE studenten  set  student_saldo=$substract  WHERE student_nr = '" . $_SESSION["user"] . "'";
                                                            $result = mysqli_query($conn, $sql1);
                                                        }
                                                    }
                                                    ?>

                                                    <form method="post">
                                                        <a href="download.php?file=../../docs/<?php echo $row['document_path']; ?>" target="blank"><input type="submit" name="btn-atc" value="download" class="material-icons"></input></a>
                                                    </form>
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