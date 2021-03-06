<?php include "../includes/menubar.php"; ?>
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
                                <thead >
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
                                            naam
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                            00-00-0000
                                        </td>
                                        <td>
                                            <a href="#"><i class="material-icons text-danger">sim_card_download</i></a>
                                        </td>
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