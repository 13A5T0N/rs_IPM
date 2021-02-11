<?php include '../includes/session.php'; 
include "../includes/scripts.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>

                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- new student -->
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h4 class="text-center">Voeg nieuw student</h4>
                                <hr class="bg-dark col-12">
                                <!-- personal info -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                                        <br>
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Naam</label>
                                            <input type="text" class="form-control" id="" name="" class="" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-top: 24px;">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Voornaam</label>
                                            <input type="text" class="form-control" id="" name="" class="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">leeftijd</label>
                                            <input type="text" class="form-control" id="" name="" class="" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Woon adres</label>
                                            <input type="text" class="form-control" id="" name="" class="" required>
                                        </div>
                                    </div>

                                </div>
                                <hr class="bg-dark col-12">
                                <!-- contact info -->
                                <div class="row">
                                    <br><br>
                                    <div class="col-sm-6">
                                        <h10 class="col-sm control-label">Contact Info<span style="color: red;">*</span></h10>
                                        <br>
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Tel nummer</label>
                                            <input type="text" class="form-control" id="" name="" class="" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-top: 24px;">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Email</label>
                                            <input type="text" class="form-control" id="" name="" class="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="text-center">Import Docenten</h4>
                                        <hr class="bg-dark col-12">
                                        <br>
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">File</label>
                                            <input type="file" class="custom-file-input" id="customFile">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
