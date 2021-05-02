<?php include '../includes/session.php';
include "../includes/scripts.php";
?>
<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">0
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link text-black active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Toevoegen</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">import</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- new student -->
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h4 class="text-center">Student registratie</h4>
                                <hr class="bg-dark col-12">
                                <!-- personal info -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="../backend/add/add_student.php" method="post" autocomplete="off">
                                            <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                                            <br>
                                            <div class="form-group">
                                                <label for="" class="col-sm control-label">Student Naam</label>
                                                <input type="text" class="form-control" id="" name="naam" required>
                                            </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-top: 24px;">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Student Voornaam</label>
                                            <input type="text" class="form-control" id="" name="voornaam" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">leeftijd</label>
                                            <input type="text" class="form-control" id="" name="leeftijd" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Woonadres</label>
                                            <input type="text" class="form-control" id="" name="woon" required>
                                        </div>
                                    </div>

                                </div>
                                <!-- contact info -->
                                <div class="row">
                                    <br><br>
                                    <div class="col-sm-6">
                                        <h10 class="col-sm control-label">Contact Info<span style="color: red;">*</span></h10>
                                        <br>
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Tel nummer</label>
                                            <input type="text" class="form-control" id="" name="tel" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" style="margin-top: 24px;">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Email</label>
                                            <input type="text" class="form-control" id="" name="email" required>
                                        </div>
                                    </div>
                                </div>
                                <hr class="bg-dark col-12">
                                <!-- Emergency info -->
                                <div class="row">
                                    <br><br>
                                    <div class="col-sm-12">
                                        <h10 class="col-sm control-label">Contact info Ouder/Verzorger</h10>
                                    </div>
                                    <br>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">naam</label>
                                            <input type="text" class="form-control" id="" name="emergency_naam">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Relatie</label>
                                            <input type="text" class="form-control" id="" name="emergency_relatie">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <br><br>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Tel nummer</label>
                                            <input type="text" class="form-control" id="" name="emergency_nummer">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="" class="col-sm control-label">Email</label>
                                            <input type="text" class="form-control" id="" name="emergency_email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-success" style="margin-left: 20px;">Opslaan</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="modal-body">
                                    <form action="../backend/add/import_student.php" method="post" autocomplete="off" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4 class="text-center">Import Student</h4>
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

    </div>
</div>
</div>
</div>

<!-- view Modal -->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Student Weergave</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="#" method="post" autocomplete="off">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <form action="#" method="post" autocomplete="off">
                                <h10 class="col-sm control-label"><strong>Persoonlijke Info</strong></h10>
                                <br>
                                <div class="form-group">
                                    <label for="" class="col-sm control-label">Student Naam</label>
                                    <input type="text" class="form-control" id="view_naam" name="naam" class="text-center" readonly>
                                </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Student Voornaam</label>
                                <input type="text" class="form-control" id="view_voornaam" name="voornaam" class="text-center" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">leeftijd</label>
                                <input type="text" class="form-control" id="view_leefijd" name="leeftijd" class="text-center" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Woonadres</label>
                                <input type="text" class="form-control" id="view_adres" name="woon" class="text-center" readonly>
                            </div>
                        </div>

                    </div>
                    <!-- contact info -->
                    <div class="row">
                        <br><br>
                        <div class="col-sm-6">
                            <h10 class="col-sm control-label"><strong>Contact Info</strong></h10>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Tel nummer</label>
                                <input type="text" class="form-control" id="view_tel" name="tel" class="text-center" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Email</label>
                                <input type="text" class="form-control" id="view_email" name="email" class="text-center" readonly>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-dark col-12">
                    <!-- Emergency info -->
                    <div class="row">
                        <br><br>
                        <div class="col-sm-12">
                            <h10 class="col-sm control-label"><strong>Contact info Ouder/Verzorger</strong></h10>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">naam</label>
                                <input type="text" class="form-control" id="view_em_naam" class="text-center" name="emergency_naam" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Relatie</label>
                                <input type="text" class="form-control" id="view_em_relatie" class="text-center" name="emergency_relatie" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <br><br>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Tel nummer</label>
                                <input type="text" class="form-control" id="view_em_tel" class="text-center" name="emergency_nummer" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Email</label>
                                <input type="text" class="form-control" id="view_em_email" class="text-center" name="emergency_email" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
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
                <h4 class="text-center">Student bewerken</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/edit/edit_student.php" method="post" autocomplete="off">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <h10 class="col-sm control-label"><strong>Persoonlijke Info</strong></h10>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Student Naam</label>
                                <input type="text" class="form-control" id="edit_naam" name="naam" class="text-center">
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Student Voornaam</label>
                                <input type="text" class="form-control" id="edit_voornaam" name="voornaam" class="text-center">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">leeftijd</label>
                                <input type="text" class="form-control" id="edit_leefijd" name="leeftijd" class="text-center">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Woonadres</label>
                                <input type="text" class="form-control" id="edit_adres" name="woon" class="text-center">
                            </div>
                        </div>

                    </div>
                    <!-- contact info -->
                    <div class="row">
                        <br><br>
                        <div class="col-sm-6">
                            <h10 class="col-sm control-label"><strong>Contact Info</strong></h10>
                            <br>
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Tel nummer</label>
                                <input type="text" class="form-control" id="edit_tel" name="tel" class="text-center">
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-top: 24px;">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Email</label>
                                <input type="text" class="form-control" id="edit_email" name="email" class="text-center">
                            </div>
                        </div>
                    </div>
                    <hr class="bg-dark col-12">
                    <!-- Emergency info -->
                    <div class="row">
                        <br><br>
                        <div class="col-sm-12">
                            <h10 class="col-sm control-label"><strong>Contact info Ouder/Verzorger</strong></h10>
                            <br>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">naam</label>
                                <input type="text" class="form-control" id="edit_em_naam" class="text-center" name="emergency_naam">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Relatie</label>
                                <input type="text" class="form-control" id="edit_em_relatie" class="text-center" name="emergency_relatie">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <br><br>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Tel nummer</label>
                                <input type="text" class="form-control" id="edit_em_tel" class="text-center" name="emergency_nummer">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="col-sm control-label">Email</label>
                                <input type="text" class="form-control" id="edit_em_email" class="text-center" name="emergency_email">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Bewerk" class="btn btn-success" style="margin-left: 20px;">
                        <!-- <button type="submit" >Save</button> -->
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
            </div>
        </div>
    </div>
</div>
</div>

<!-- money Modal -->
<div class="modal fade" id="money">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Saldo Opwaarderen</h4>
                <hr class="bg-dark col-10">
                <!-- personal info -->
                <form action="../backend/add/add_money.php" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h3 class="text-center"><strong>Hoeveel wilt u opwaarderen?</strong> </h3>
                            <!-- <h4 class="text-left"><strong>SRD</strong> </h4> -->
                            <h4 class="text-left"><strong>SRD</strong></h4><input type="text" id="amount" name="amount">
                            <input type="hidden" name="money_id" id="money_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="add">Opwaarderen</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
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
                        <div class="col-sm-12 ">
                            <h3 class="text-center"><strong>Bent u zeker?</strong> </h3>
                            <h4 class="text-center"><strong>U kunt dit niet ongedaan maken!</strong> </h4>
                            <input type="hidden" name="delete_id" id="delete_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" name="add">Verwijderen</button>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Sluiten</button>
            </div>
        </div>
    </div>
</div>
</div>