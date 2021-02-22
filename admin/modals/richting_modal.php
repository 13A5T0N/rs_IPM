<?php include '../includes/session.php';
include "../includes/scripts.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_richting.php" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw richting</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="" name="naam" class="" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">afkorting</label>
                                <input type="text" class="form-control" id="" name="afkoritng" class="" required>
                            </div>
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

<!-- view Modal -->
<div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_richting.php" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw richting</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="view_naam" name="naam" class="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">afkorting</label>
                                <input type="text" class="form-control" id="view_afk" name="afkoritng" class="" readonly>
                            </div>
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

<!-- edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/edit/edit_richting.php" method="post" autocomplete="off">
                <input type="hidden" name="edit_id" id="edit_id">
                    <h4 class="text-center">bewerk nieuw richting</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="edit_naam" name="naam" class="" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">afkorting</label>
                                <input type="text" class="form-control" id="edit_afk" name="afkoritng" class="" required>
                            </div>
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