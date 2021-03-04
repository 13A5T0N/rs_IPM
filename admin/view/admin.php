<?php
include "../includes/menubar.php";
include "../includes/errors.php";
?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12" style="position:relative">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Admin Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                                Admin Toevoegen
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
                                        Voornaam
                                    </th>
                                    <th>
                                        Naam
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM admin";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['admin_id']; ?></td>
                                                <td><?php echo $row['admin_voornaam']; ?></td>
                                                <td><?php echo $row['admin_naam']; ?></td>
                                                <td><?php echo $row['admin_status']; ?></td>
                                                <td>
                                                    <a href="#" class="view" data-id="<?php echo $row['admin_id']; ?>"><i class="material-icons">eye</i></a>
                                                    <a href="#" class="edit" data-id="<?php echo $row['admin_id']; ?>"><i class="material-icons text-info">edit</i></a>
                                                    <a href="#" class="delete" data-id="<?php echo $row['admin_id']; ?>"><i class="material-icons text-danger">delete</i></a>
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

    <!-- delete Modal -->
    <div class="modal fade" id="delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Vewijder Admin account</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <form action="../backend/delete/delete_admin.php" method="post" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <h3 class="text-center"><strong>Bent u zeker?</strong> </h3>
                                <h4 class="text-center"><strong>U kunt dit niet ongedaan maken!</strong> </h3>
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

<?php
include "../includes/scripts.php";
include "../modals/admin_modal.php";

?>

<script>
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

    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("admin");
        element.classList.add("active");
    });

    function get_row(id) {
        $.ajax({
            type: 'POST',
            url: '../backend/get/get_admin.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#view_naam').val(response.admin_naam);
                $('#view_voornaam').val(response.admin_voornaam);
                $('#veiw_email').val(response.admin_email);

                $('#edit_naam').val(response.admin_naam);
                $('#edit_voornaam').val(response.admin_voornaam);
                $('#edit_email').val(response.admin_email);
                $('#edit_id').val(response.admin_id)
                $('#status option[value=' + response.admin_status + ']').attr('selected', 'selected');

                $('#delete_id').val(response.admin_id)
            }
        });
    }
</script>