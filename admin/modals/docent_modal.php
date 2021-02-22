<?php include '../includes/session.php';
include "../includes/scripts.php";
?>
<!-- view Modal -->
<div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="#" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw docent</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h10 class="col-sm control-label">Persoonlijke Info</h10>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="view_naam" name="" class="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Voornaam</label>
                                <input type="text" class="form-control" id="view_voornaam" name="" readonly>
                            </div>
                        </div>
                    </div>

            </div>
            <hr class="bg-dark col-10">
            <!-- contact info -->
            <div class="row">
                <br><br>
                <div class="col-sm-6">
                    <h10 class="col-sm control-label">Contact Info</h10>
                    <br>
                    <div class="form-group">
                        <label for="" class="col-sm control-label">Tel nummer</label>
                        <input type="text" class="form-control" id="view_tel" name="tel" class="" readonly>
                    </div>
                </div>
                <div class="col-sm-6" style="margin-top: 24px;">
                    <div class="form-group">
                        <label for="" class="col-sm control-label">Email</label>
                        <input type="text" class="form-control" id="view_email" name="email" class="" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- add modal -->
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

<!-- edit Modal -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/edit/edit_docent.php" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw student</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br>
                            <input type="hidden" id="edit_id" name="edit_id">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="edit_naam" name="naam" class="" required>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Voornaam</label>
                                <input type="text" class="form-control" id="edit_voornaam" name="voornaam" class="" required>
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
                        <input type="text" class="form-control" id="edit_tel" name="tel" class="" required>
                    </div>
                </div>
                <div class="col-sm-6" style="margin-top: 24px;">
                    <div class="form-group">
                        <label for="" class="col-sm control-label">Email</label>
                        <input type="text" class="form-control" id="edit_email" name="email" class="" required>
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