<?php include "../includes/menubar.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Student Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                                Student Toevoegen
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
                                        leeftijd
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
                                            20
                                        </td>
                                        <td>
                                            Actief
                                        </td>
                                        <td>
                                            <a href="#"><i class="material-icons text-success">launch</i></a>
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
    include "../modals/student_modal.php";
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            var element = document.getElementById("studenten");
            element.classList.add("active");
        });
    </script>