<?
include "../../config/db_conn.php";
?>

<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form enctype="multipart/form-data" action="../backend/add/add_rooster.php" method="post" autocomplete="off">
                    <h4 class="text-center">Voeg nieuw rooster</h4>
                    <hr class="bg-dark col-11">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-12">
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
                    </div><br>
                    <h4 class="text-center">Geldig</h4>
                    <hr class="bg-dark col-11">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-control">Start</label>
                                <input type="date" class="form-control datepicker" value="21/06/2018" name="start" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-control">eind</label>
                                <input type="date" class="form-control datepicker" value="21/06/2018" name="eind" />
                            </div>
                        </div>
                    </div><br>
                    <h4 class="text-center">File</h4>
                    <hr class="bg-dark col-11">
                    <div>
                        <span class="fileinput-new">Select file</span>
                        <br>
                        <input type="file" name="filename" id="">
                        </span>
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

 <!-- delete Modal -->
 <div class="modal fade" id="delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="text-center">Vewijder rooster</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <form action="../backend/delete/delete_rooster.php" method="post" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6 ">
                                <h3 class="text-center"><strong style="text-align: center;">Bent u zeker</strong> </h3>
                                <input type="hidden" name="delete_id" id="delete_id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning" name="add">delete</button>
                    </form>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>