<?php include "../includes/menubar.php"; 
include "../includes/errors.php";?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                    <h4 class="card-title ">Richting Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                                Richting Toevoegen
                            </button></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Naam
                                    </th>
                                    <th>
                                        afkorting
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM richting";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['richting_id']; ?></td>
                                                <td><?php echo $row['richting_naam']; ?></td>
                                                <td><?php echo $row['richting_afkorting']; ?></td>
                                                <td>
                                                    <a href="#" class="view" data-id="<?php echo $row['richting_id']; ?>"><i class="material-icons">launch</i></a>
                                                    <a href="#" class="edit" data-id="<?php echo $row['richting_id']; ?>"><i class="material-icons text-info">edit</i></a>
                                                    <!-- <a href="#" class="delete" data-id="<?php echo $row['Richting_nr']; ?>"><i class="material-icons text-danger">delete</i></a> -->
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        echo "0 results";
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

            var element = document.getElementById("richting");
            element.classList.add("active");
        });
    </script>
    <?php include "../includes/scripts.php";
    include "../modals/richting_modal.php"; ?>