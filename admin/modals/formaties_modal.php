<!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-color="green" data-background-color="black">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="../backend/add/add_formatie.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="text-center">Import klassen formaties</h4>
                            <hr class="bg-dark col-12">
                            <br>
                            <div>
                                <span class="fileinput-new">Select file</span>
                                <br>
                                <input type="file" name="filename" id="">
                                </span>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form>
            </div>
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
                    <h4 class="text-center">Bezichitg klas</h4>
                    <hr class="bg-dark col-10">
                    <!-- personal info -->
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>student_nr</th>
                                        <th>student naam</th>
                                        <th>Student voornaam</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                </tbody>
                            </table>
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