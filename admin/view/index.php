<?php include "../includes/menubar.php"; ?>

<div class="content">
    <div class="container-fluid">
        <!-- cards -->
        <div class="row">
            <!-- documenten card -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">attachment</i>
                        </div>
                        <p class="card-category">Documenten</p>
                        <h3 class="card-title">50
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Afgelopen 24 uur
                        </div>
                    </div>
                </div>
            </div>
            <!-- studenten card -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <p class="card-category">Studenten</p>
                        <h3 class="card-title">220</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Afgelopen 24 uur
                        </div>
                    </div>
                </div>
            </div>

            <!-- docenten card -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">portrait</i>
                        </div>
                        <p class="card-category">Docenten</p>
                        <h3 class="card-title">75</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Afgelopen 24 uur
                        </div>
                    </div>
                </div>
            </div>

            <!-- richtingen card -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">web_asset</i>
                        </div>
                        <p class="card-category">Richtingen</p>
                        <h3 class="card-title">245</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Afgelopen 24 uur
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- chart -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-chart">
                    <div class="card-header card-header-success">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">chart</h4>
                        <p class="card-category">
                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> Openstaande aanvragen.
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> 4 minuten geleden bijgewerkt
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- log -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Laatste actie</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>ID</th>
                                <th>Actie</th>
                                <th>persoon</th>
                                <th>datum</th>
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

            <!-- requests -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Document aanvraag</h4>
                       
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>#</th>
                                <th>student</th>
                                <th>document</th>
                                <th>datum</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>student</td>
                                    <td>document</td>
                                    <td>00-00-000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>student</td>
                                    <td>document</td>
                                    <td>00-00-000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>student</td>
                                    <td>document</td>
                                    <td>00-00-000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>student</td>
                                    <td>document</td>
                                    <td>00-00-000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>student</td>
                                    <td>document</td>
                                    <td>00-00-000</td>
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