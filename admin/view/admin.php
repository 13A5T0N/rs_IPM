<?php include "../includes/menubar.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
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
                                        Status
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td>
                                            Actief
                                        </td>
                                        <td>
                                            <a href="#" class="edit"><i class="material-icons">launch</i></a>
                                            <a href="#"><i class="material-icons text-info">edit</i></a>
                                            <a href="#"><i class="material-icons text-danger">delete</i></a>
                                        </td>
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