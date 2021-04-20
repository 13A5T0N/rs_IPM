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
                                <th>#</th>
                                <th>Naam</th>
                                <th>Tarief</th>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM document GROUP BY document_id";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['document_id']; ?></td>
                                            <td><?php echo $row['document_naam']; ?></td>
                                            <td><?php echo $row['document_tarief']; ?></td>
                                            <td>
                                                <!-- <a href="../../docs/<?php echo $row['document_path']; ?>" target="blank"><i class="material-icons">launch</i></a> -->
                                                <!-- <a href="#" class="delete" data-id="<?php echo $row['document_id']; ?>"><i class="material-icons text-danger">delete</i></a> -->
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
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
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("dash");
        element.classList.add("active");
    });
</script>
<?php include "../includes/scripts.php"; ?>