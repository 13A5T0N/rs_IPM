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
                                        uploaded
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
                                            naam
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                            00-00-0000
                                        </td>
                                        <td>
                                        <a href="#"><i class="material-icons text-success">open_in_new</i></a>
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
<?php
include "../includes/scripts.php";
include "../modals/document_modal.php";
?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("documenten");
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

    document.addEventListener("DOMContentLoaded", function(event) {

        var element = document.getElementById("docenten");
        element.classList.add("active");
    });

    function get_row(id) {
        $.ajax({
            type: 'POST',
            url: '../backend/get_docent.php',
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
