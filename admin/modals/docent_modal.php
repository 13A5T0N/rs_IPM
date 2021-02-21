<?php include '../includes/session.php';
include "../includes/scripts.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_docent.php" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw student</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="" name="naam" class="" required>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Voornaam</label>
                                <input type="text" class="form-control" id="" name="voornaam" class="" required>
                            </div>
                        </div>
                    </div>

            </div>
            <hr class="bg-dark col-10">
            <!-- contact info -->
            <div class="row">
                <br><br>
                <div class="col-sm-6">
                    <h10 class="col-sm control-label">Contact Info<span style="color: red;">*</span></h10>
                    <br>
                    <div class="form-group">
                        <label for="" class="col-sm control-label">Tel nummer</label>
                        <input type="text" class="form-control" id="" name="tel" class="" required>
                    </div>
                </div>
                <div class="col-sm-6" style="margin-top: 24px;">
                    <div class="form-group">
                        <label for="" class="col-sm control-label">Email</label>
                        <input type="text" class="form-control" id="" name="email" class="" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_docent.php" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw student</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="" name="naam" class="" required>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Voornaam</label>
                                <input type="text" class="form-control" id="" name="voornaam" class="" required>
                            </div>
                        </div>
                    </div>

            </div>
            <hr class="bg-dark col-10">
            <!-- contact info -->
            <div class="row">
                <br><br>
                <div class="col-sm-6">
                    <h10 class="col-sm control-label">Contact Info<span style="color: red;">*</span></h10>
                    <br>
                    <div class="form-group">
                        <label for="" class="col-sm control-label">Tel nummer</label>
                        <input type="text" class="form-control" id="" name="tel" class="" required>
                    </div>
                </div>
                <div class="col-sm-6" style="margin-top: 24px;">
                    <div class="form-group">
                        <label for="" class="col-sm control-label">Email</label>
                        <input type="text" class="form-control" id="" name="email" class="" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Save">
                </form>
            </div>
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