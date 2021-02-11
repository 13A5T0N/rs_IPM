<?php include '../includes/session.php';
include "../includes/scripts.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Voeg nieuwe Cijfers</h4>
                <hr class="bg-dark col-10">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="" class="col-sm control-label">Student File</label>
                            <input type="file" class="custom-file-input" id="customFile">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>