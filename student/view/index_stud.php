<?php include "../includes/menubar_stud.php"; ?>

<div class="content">
    <div class="container-fluid">
        <!-- cards -->
        <div class="row">
            <!-- Upcoming classes -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">attachment</i>
                        </div>
                        <p class="card-category">Upcoming classes</p>
                        <h3 class="card-title">50
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent updated documents -->
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">web_asset</i>
                        </div>
                        <p class="card-category">Recent updated documents</p>
                        <h3 class="card-title">245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <!-- log -->
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Student gegevens</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>Naam</th>
                                <th>Voornaam</th>
                                <th>Geboortedatum</th>
                                <th>Contact</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>document upload</td>
                                    <td>admin</td>
                                    <td>00-00-0000</td>
                                </tr> 
                    <tr>
                                    <td>2</td>
                                    <td>document upload</td>
                                    <td>admin</td>
                                    <td>00-00-0000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>document upload</td>
                                    <td>admin</td>
                                    <td>00-00-0000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>document upload</td>
                                    <td>admin</td>
                                    <td>00-00-0000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>document upload</td>
                                    <td>admin</td>
                                    <td>00-00-0000</td>
                                </tr> 
                     </tbody>
                        </table> 

            

                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("dash");
        element.classList.add("active");
    });
</script>
<?php include "../includes/scripts.php"; ?>