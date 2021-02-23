<?php include "../includes/menubar.php"; 
include "../includes/errors.php";?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                    <h4 class="card-title ">Documenten Table</h4>
                        <p class="card-category"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                                Document Toevoegen
                            </button></p>
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
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM document";
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
                                                    <a href="../../docs/<?php echo $row['document_path']; ?>" target="blank"><i class="material-icons">launch</i></a>
                                                    <a href="#" class="delete" data-id="<?php echo $row['document_id']; ?>"><i class="material-icons text-danger">delete</i></a>
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
                <h4 class="text-center">Vewijder document</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/delete/delete_document.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h3 class="text-center"><strong style="text-align: center;">Bent u zeker</strong> </h3>
                            <input type="hidden" name="delete_id" id="edit_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" name="add">delete</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include "../includes/scripts.php";
?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("documenten");
        element.classList.add("active");
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
            url: '../backend/get_document.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#naam').val(response.document_naam);
                $('#tarief').val(response.document_tarief);
                $('#edit_id').val(response.document_id);
                $('#file').val(response.document_path);
                $('#delete_id').val(response.document_id);
            }
        });
    }
</script>
<?php include "../modals/document_modal.php";?>
