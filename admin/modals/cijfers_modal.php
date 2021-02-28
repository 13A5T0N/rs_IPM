<?php include '../includes/session.php';
include "../includes/scripts.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_cijfers.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-center">Import Cijfers</h4>
                            <hr class="bg-dark col-12">
                            <br>
                            <div>
                                <span class="fileinput-new">Selecteer file</span>
                                <br>
                                <input type="file" name="filename" id="">
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" value="Opslaan">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>