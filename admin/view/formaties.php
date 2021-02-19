<?php include "../includes/menubar.php"; 
include "../includes/errors.php";?>
<script>
        document.addEventListener("DOMContentLoaded", function(event) {

            var element = document.getElementById("formaties");
            element.classList.add("active");
        });
    </script>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="button" aria-pressed="false">
                            Single toggle
                        </button>
                        <h4 class="card-title ">CIjfers</h4>
                        <p class="card-category">Cijfers overzicht</p>
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
                                        richting
                                    </th>
                                    <th>
                                        uploaded
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
                                            1.02
                                        </td>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            00-00-0000
                                        </td>
                                        <td>
                                            <a href="#"><i class="material-icons text-danger">delete</i></a>
                                            <a href="#"><i class="material-icons text-success">launch</i></a>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "../includes/scripts.php"; ?>