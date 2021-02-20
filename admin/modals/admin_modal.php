<?php include '../includes/session.php';
include "../includes/scripts.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Voeg nieuw Admin</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/add/add_admin.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="" name="naam" class="" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label ">Voornaam</label>
                                <input type="text" class="form-control" id="" name="voornaam" class="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Email<span style="color: red;">*</span></label>
                                <input type="text" class="form-control" id="" name="email" class="" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="add">Save</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- view Modal -->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Admin</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="#" method="post" autocomplete="off" class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control text-center" id="view_naam" name="naam" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label ">Voornaam</label>
                                <input type="text" class="form-control text-center" id="view_voornaam" name="voornaam" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Email</label>
                                <input type="text" class="form-control text-center" id="veiw_email" name="email" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- edit Modal -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="text-center">persoonlijke gegevens</h5>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/edit/edit_admin.php" method="post" autocomplete="off" class="">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control text-center" id="edit_naam" name="naam">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label ">Voornaam</label>
                                <input type="text" class="form-control text-center" id="edit_voornaam" name="voornaam">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Email</label>
                                <input type="text" class="form-control text-center" id="edit_email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <h5 class="text-center">Acount</h5>
                        <hr class="bg-dark col-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="status" class="col-sm control-label">Status</label>
                                    <select class="form-control form-control-sm" name="status" id="status">
                                        <option value="actief">Actief</option>
                                        <option value="deactief">Deactief</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check" style="margin-top: 50px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="password" value="1">
                                        <label class="custom-control-label" for="customCheck1"><span style="margin-left: 20px;"></span> Reset Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Update</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>