<?php include '../includes/session.php';

include "../../config/db_conn.php";
?>

<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_vak.php" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw vak</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br> -->
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
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="jaar">Schooljaar</label>
                                <select id="jaar" name="jaar">
                                    <option value="" selected> --Select-- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">             
                            <div class="form-group">
                                <label for="richting">Richting</label>
                                <select id="richting" name="richting">
                                    <option value="" selected> --Select-- </option>
                                    <?php $sql = "SELECT * FROM  richting";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <option value="<?php echo $row['richting_id'] ?>"><?php echo $row['richting_afkorting'] ?></option>

                                    <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    } ?>
                                </select>
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
</div>

<!-- view Modal -->
<div class="modal fade" id="view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_vak.php" method="post" autocomplete="off">
                    <h4 class="text-center">View vak</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br> -->
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
                    <div class="row">
                        <div class="col-sm-6">
                        <div class="form-group">
                                <label for="" class="col-sm control-label">Schooljaar</label>
                                <input type="text" class="form-control" id="view_schooljaar" name="afkoritng" class="" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">             
                        <div class="form-group">
                                <label for="" class="col-sm control-label">richting</label>
                                <input type="text" class="form-control" id="view_richting" name="afkoritng" class="" readonly>
                            </div>
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

<!-- edit Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/edit/edit_vak.php" method="post" autocomplete="off">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <h4 class="text-center">Bewerk vak</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- <h10 class="col-sm control-label">Persoonlijke Info<span style="color: red;">*</span></h10>
                            <br> -->
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
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jaar">Schooljaar</label>
                                <select id="edit_jaar" name="jaar">
                                    <option value="" selected> --Select-- </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">             
                            <div class="form-group">
                                <label for="richting">Richting</label>
                                <select id="edit_richting" name="richting">
                                    <option value="" selected> --Select-- </option>
                                    <?php $sql = "SELECT * FROM  richting";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                    ?>
                                            <option value="<?php echo $row['richting_id'] ?>"><?php echo $row['richting_afkorting'] ?></option>

                                    <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    } ?>
                                </select>
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
</div>
<?php
include "../includes/scripts.php";
?>