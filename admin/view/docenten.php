<?php include "../includes/menubar.php"; 
include "../includes/errors.php";?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Docent Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                                Docent Toevoegen
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
                                        Voornaam
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM docenten";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<tr>
                                           <td>
                                               ' . $row['docent_id'] . '
                                           </td>
                                           <td>
                                                ' . $row['docent_naam'] . '
                                           </td>
                                           <td>
                                                ' . $row['docent_voornaam'] . '
                                           </td>
                                           <td>
                                               <a href="#" data-id =" ' . $row['docent_id'] . '"><i class="material-icons text-success">launch</i></a>
                                               <a href="#" data-id =" ' . $row['docent_id'] . '" ><i class="material-icons text-info">edit</i></a>
                                               <a href="#" data-id =" ' . $row['docent_id'] . '"><i class="material-icons text-danger">delete</i></a>
                                           </td>
                                       </tr>';
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>

                                </tbody data-id>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../includes/scripts.php";
    include "../modals/docent_modal.php";
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            var element = document.getElementById("docenten");
            element.classList.add("active");
        });
    </script>