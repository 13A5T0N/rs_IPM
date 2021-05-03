<?php include "../includes/menubar.php";
include "../includes/errors.php"; ?>
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title text-uppercase font-weight-bold space"">Docent Tabel</h4>
                        <p class=" card-category"><button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#add">
                                Docent Toevoegen
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
                                        Naam
                                    </th>
                                    <th>
                                        Voornaam
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM docenten";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<tr>
                                           <td>
                                               ' . $row['docent_id'] . '
                                           </td>
                                           <td>
                                                ' . $row['docent_naam'] . '
                                           </td>
                                           <td>
                                                ' . $row['docent_voornaam'] . '
                                           </td>
                                           <td>
                                               <a href="#" class="view"  data-id =" ' . $row['docent_id'] . '"><i class="material-icons text-success">launch</i></a>
                                               <a href="#" class="edit" data-id =" ' . $row['docent_id'] . '" ><i class="material-icons text-info">edit</i></a>
                                               <a href="#" class="delete" data-id =" ' . $row['docent_id'] . '"><i class="material-icons text-danger">delete</i></a>
                                           </td>
                                       </tr>';
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
                    <h4 class="text-center">Vewijder Docent account</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <form action="../backend/delete/delete_docent.php" method="post" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <h3 class="text-center"><strong>Bent u zeker?</strong> </h3>
                                <h4 class="text-center"><strong>U kunt dit niet ongedaan maken!</strong> </h4>
                                <input type="hidden" name="delete_id" id="delete_id">
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
include "../modals/docent_modal.php";
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

        var element = document.getElementById("docenten");
        element.classList.add("active");
    });

    function get_row(id) {
        $.ajax({
            type: 'POST',
            url: '../backend/get/get_docent.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('#view_naam').val(response.docent_naam);
                $('#view_voornaam').val(response.docent_voornaam);
                $('#view_email').val(response.docent_email);
                $('#view_tel').val(response.docent_tel);

                $('#edit_naam').val(response.docent_naam);
                $('#edit_voornaam').val(response.docent_voornaam);
                $('#edit_email').val(response.docent_email);
                $('#edit_id').val(response.docent_id)
                $('#edit_tel').val(response.docent_tel);


                $('#delete_id').val(response.docent_id)
            }
        });
    }
</script>