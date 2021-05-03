<?php include "../includes/menubar.php";
include "../includes/errors.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title text-uppercase font-weight-bold space">Klassen formatie Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#add">
                                formatie Toevoegen
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
                                        Klas
                                    </th>
                                    <th>
                                        Richting
                                    </th>
                                    <th>
                                        Schooljaar
                                    </th>
                                    <!-- <th>
                                        Acties
                                    </th> -->
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "select klas_formatie.formatie_id as klf_fmid,klas_naam,formatie_schooljaar, richting_afkorting
                                    from klas_formatie, klassen,klassen_formaties, richting 
                                    where
                                    klas_formatie.formatie_klas = klassen.klas_id and  klassen_formaties.formatie_id = klas_formatie.formatie_klas and klassen.klas_richting = richting.richting_id";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['klf_fmid']; ?></td>
                                                <td><?php echo $row['klas_naam']; ?></td>
                                                <td><?php echo $row['richting_afkorting']; ?></td>
                                                <td><?php echo $row['formatie_schooljaar']; ?></td>
                                                <!-- <td>
                                                    <a href="#" class="view" data-id="<?php echo $row['klf_fmid']; ?>"><i class="material-icons">launch</i></a>
                                                    <a href="#" class="delete" data-id="<?php echo $row['klf_fmid']; ?>"><i class="material-icons text-danger">delete</i></a>
                                                </td> -->
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
</div>
<!-- delete Modal -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Vewijder klas formatie</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/delete/delete_klas.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h3 class="text-center"><strong style="text-align: center;">Bent u zeker?</strong> </h3>
                            <h3 class="text-center"><strong style="text-align: center;">U kunt dit niet ongedaan maken!</strong> </h3>
                            <input type="hidden" name="delete_id" id="delete_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" name="add">Verwijderen</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
            </div>
        </div>
    </div>
</div>
</div>
<?php include "../includes/scripts.php"; ?>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("formaties");
        element.classList.add("active");
    });

    $(document).on('click', '.view', function(e) {
        var id = $(this).data('id');
        $('#view').modal('show');
        get_row(id);
    });

    $(document).on('click', '.edit', function(e) {
        var id = $(this).data('id');
        $('#edit').modal('show');
        get_row(id);
    });

    $(document).on('click', '.delete', function(e) {
        var id = $(this).data('id');
        $('#delete').modal('show');
        get_row(id);
    });


    function get_row(id) {
        $.ajax({
            type: 'POST',
            url: '../backend/get/get_klas.php',
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


                $('#delete_id').val(response.klas_id)
            }
        });
    }
</script>
<?php include "../modals/formaties_modal.php"; ?>