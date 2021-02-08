<?php include "../includes/menubar.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Rooster</h4>
                        <p class="card-category">Rooster overzicht</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead >
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        school jaar
                                    </th>
                                    <th>
                                        periode
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
                                            4
                                        </td>
                                        <td>
                                            12
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
    <script>
    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("roosters");
        element.classList.add("active");
    });
</script>
    <?php include "../includes/scripts.php"; ?>