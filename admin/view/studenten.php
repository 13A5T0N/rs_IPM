<?php include "../includes/menubar.php";
include "../includes/errors.php"; ?>

<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title ">Student Tabel</h4>
                        <p class="card-category"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#add">
                                Student Toevoegen
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
                                        Voornaam
                                    </th>
                                    <th>
                                        email
                                    </th>
                                    <th>
                                        leeftijd
                                    </th>
                                    <th>
                                        Acties
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM studenten";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['student_nr']; ?></td>
                                                <td><?php echo $row['student_voornaam']; ?></td>
                                                <td><?php echo $row['student_naam']; ?></td>
                                                <td><?php echo $row['student_email']; ?></td>
                                                <td><?php echo $row['student_leeftijd']; ?></td>
                                                <td>
                                                    <a href="#" class="view" data-id="<?php echo $row['student_nr']; ?>"><i class="material-icons">launch</i></a>
                                                    <a href="#" class="edit" data-id="<?php echo $row['student_nr']; ?>"><i class="material-icons text-info">edit</i></a>
                                                    <a href="#" class="delete" data-id="<?php echo $row['student_nr']; ?>"><i class="material-icons text-danger">delete</i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        echo "0 results";
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
                <h4 class="text-center">Vewijder student account</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/delete/delete_student.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <h3 class="text-center"><strong>Bent u zeker</strong> </h3>
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
    include "../modals/student_modal.php";
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            var element = document.getElementById("studenten");
            element.classList.add("active");
        });

        $(document).on('click', '.delete', function(e) {
            var id = $(this).data('id');
            $('#delete').modal('show');
            get_row(id);
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
        function get_row(id) {
            $.ajax({
                type: 'POST',
                url: '../backend/get_student.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    
                    $('#view_naam').val(response.student_naam);
                    $('#view_voornaam').val(response.student_voornaam);
                    $('#view_leefijd').val(response.student_leeftijd);
                    $('#view_adres').val(response.student_adres);
                    $('#view_tel').val(response.student_tel);
                    $('#view_email').val(response.student_email);
                    $('#view_em_naam').val(response.student_emergency_contact);
                    $('#view_em_relatie').val(response.student_emergency_relatie);
                    $('#view_em_tel').val(response.student_emergency_nummer);
                    $('#view_em_email').val(response.student_emergency_email);
                    
                    $('#edit_id').val(response.student_nr);
                    $('#edit_naam').val(response.student_naam);
                    $('#edit_voornaam').val(response.student_voornaam);
                    $('#edit_leefijd').val(response.student_leeftijd);
                    $('#edit_adres').val(response.student_adres);
                    $('#edit_tel').val(response.student_tel);
                    $('#edit_email').val(response.student_email);
                    $('#edit_em_naam').val(response.student_emergency_contact);
                    $('#edit_em_relatie').val(response.student_emergency_relatie);
                    $('#edit_em_tel').val(response.student_emergency_nummer);
                    $('#edit_em_email').val(response.student_emergency_email);

                    $('#delete_id').val(response.student_nr);
                }
            });
        }
    </script>