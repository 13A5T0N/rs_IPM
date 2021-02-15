<?php 
include "../includes/menubar.php"; 
include "../includes/errors.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12" style="position:relative">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Admin Table</h4>
                        <p class="card-category"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                                Admin Toevoegen
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
                                        email
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM admin";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['admin_id'];?></td>
                                                <td><?php echo $row['admin_naam'];?></td>
                                                <td><?php echo $row['admin_voornaam'];?></td>
                                                <td><?php echo $row['admin_email'];?></td>
                                                <td>
                                                    <a href="#" class="edit"><i class="material-icons">launch</i></a>
                                                    <a href="#"><i class="material-icons text-info">edit</i></a>
                                                    <a href="#"><i class="material-icons text-danger">delete</i></a>
                                                </td>
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

    <?php
    include "../includes/scripts.php";
    include "../modals/admin_modal.php";
    
    ?>

    <script>
        $(document).on('click', '.edit', function(e) {
            console.log('test')
            var id = $(this).data('id');
            $('#edit').modal('show');
        });


        document.addEventListener("DOMContentLoaded", function(event) {

            var element = document.getElementById("admin");
            element.classList.add("active");
        });
    </script>