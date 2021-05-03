<?php include "../includes/menubar.php";
include "../includes/errors.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title text-uppercase font-weight-bold space">Rooster Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#add">
                                Rooster Toevoegen
                            </button></p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-warning">
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Richting
                                    </th>
                                    <th>Periode</th>
                                    <th>
                                        Begin datum
                                    </th>
                                    <th>
                                        Eind datum
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select * from rooster, richting where rooster.rooster_richting = richting.richting_id";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['rooster_id']; ?></td>
                                                <td><?php echo $row['richting_naam']; ?></td>
                                                <td><?php echo $row['rooster_periode']; ?></td>
                                                <td><?php echo $row['rooster_start']; ?></td>
                                                <td><?php echo $row['rooster_eind']; ?></td>
                                                <td>
                                                    <a href="../../docs/<?php echo $row['rooster_path']; ?>" target="blank"><i class="material-icons">launch</i></a>
                                                    <a href="#" class="delete" data-id="<?php echo $row['rooster_id']; ?>"><i class="material-icons text-danger">delete</i></a>
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
    <?php include "../includes/scripts.php"; ?>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var element = document.getElementById("roosters");
            element.classList.add("active");
        });

        $(document).on('click', '.delete', function(e) {
            var id = $(this).data('id');
            $('#delete').modal('show');
            get_row(id);
        });


        function get_row(id) {
            $.ajax({
                type: 'POST',
                url: '../backend/get/get_rooster.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#view_naam').val(response.klas_naam);
                    $('#view_schooljaar').val(response.klas_jaar);
                    $('#view_richting').val(response.richting_afkorting);

                    $('#edit_naam').val(response.klas_naam);
                    $('#edit_jaar option[value="' + response.klas_jaar + '"]').attr('selected', 'selected');
                    $('#edit_richting option[value="' + response.richting_id + '"]').attr('selected', 'selected');
                    $('#edit_id').val(response.klas_id)


                    $('#delete_id').val(response.rooster_id)
                }
            });
        }
    </script>
    <?php include "../modals/rooster_modal.php"; ?>