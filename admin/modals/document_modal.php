<?
include "../../config/db_conn.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form enctype="multipart/form-data" action="../backend/add/add_document.php" method="post" autocomplete="off">
                    <h4 class="text-center">Documenten toevoegen</h4>
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
                                <label for="" class="col-sm control-label">Tarief</label>
                                <input type="text" class="form-control" id="" name="tarief" class="" required>
                            </div>
                        </div>
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                    <div>
                        <span class="fileinput-new">Selecteer file</span>
                        <br>
                        <input type="file" name="filename" id="">
                        </span>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Opslaan">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                </form>
            </div>
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
                <form action="#" method="post" autocomplete="off">
                    <h4 class="text-center">bezichtig klas</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br> -->
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Naam</label>
                                <input type="text" class="form-control" id="view_naam" name="" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">schooljaar</label>
                                <input type="text" class="form-control" id="view_schooljaar" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">richting</label>
                                <input type="text" class="form-control" id="view_richting" readonly>
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


<?php
include "../includes/scripts.php";
?>