<?php include "../includes/menubar.php";
include "../includes/errors.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Vakken Tabel</h4>
                        <p class="card-category"><button type="button" id="add" class="btn btn-info" data-toggle="modal" data-target="#delete">
                                Vak Toevoegen
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
                                        afkorting
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM vak";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['vak_id']; ?></td>
                                                <td><?php echo $row['vak_naam']; ?></td>
                                                <td><?php echo $row['vak_afkorting']; ?></td>
                                                <td>
                                                    <a href="#" class="view" data-id="<?php echo $row['vak_id']; ?>"><i class="material-icons">launch</i></a>
                                                    <a href="#" class="edit" data-id="<?php echo $row['vak_id']; ?>"><i class="material-icons text-info">edit</i></a>
                                                    <!-- <a href="#" class="delete" data-id="<?php echo $row['vak_id']; ?>"><i class="material-icons text-danger">delete</i></a> -->
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

<!-- delete Modal -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_vak.php" method="post" autocomplete="off">
                    <h4 class="text-center">Vak toevoegen</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br> -->
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="" name="naam" class="" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">afkorting</label>
                                <input type="text" class="form-control" id="" name="afkoritng" class="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jaar">Schooljaar</label>
                                <select id="jaar" name="jaar">
                                    <option value="" selected> --Select-- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="richting">Richting</label>
                                <select id="richting" name="richting">
                                    <option value="" selected> --Select-- </option>
                                    <?php $sql = "SELECT * FROM  richting";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <option value="<?php echo $row['richting_id'] ?>"><?php echo $row['richting_afkorting'] ?></option>

                                    <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    } ?>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Opslaan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- add Modal -->
<div class="modal fade" id="new">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Vak Verwijderen</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/delete/delete_vak.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <h3 class="text-center"><strong style="text-align: center;">Bent u zeker?</strong> </h3>
                            <h4 class="text-center"><strong style="text-align: center;">U kunt dit niet ongedaan maken!</strong> </h4>
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



<?php include "../includes/scripts.php";
?>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var element = document.getElementById("vak");
        element.classList.add("active");
    });

    // $(document).on('click', '.add', function(e) {
    //     var id = $(this).data('id');
    //     $('#add').modal('show');
    // });


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
            url: '../backend/get/get_vak.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#view_naam').val(response.vak_naam);
                $('#view_afk').val(response.vak_afkorting);
                $('#view_schooljaar').val(response.vak_jaar);
                $('#view_richting').val(response.richting_afkorting);

                $('#edit_naam').val(response.vak_naam);
                $('#edit_afk').val(response.vak_afkorting);
                $('#edit_jaar option[value="' + response.vak_jaar + '"]').attr('selected', 'selected');
                $('#edit_richting option[value="' + response.vak_richting + '"]').attr('selected', 'selected');
                $('#edit_id').val(response.vak_id)


                $('#delete_id').val(response.vak_id)
            }
        });
    }
</script>

<?php include "../modals/vak_modal.php"; ?>