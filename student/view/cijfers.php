<?php include "../includes/menubar.php"; ?>
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
                                            <a href="#"><i class="material-icons text-danger">visibility</i></a>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <?php include "../includes/scripts.php"; 
      include "../modals/cijfers_modal.php";?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var element = document.getElementById("cijferlijst");
            element.classList.add("active");
        });
    </script>