<?php
if (isset($_SESSION['error'])) {
    echo "
      <div class='alert alert-danger alert-dismissible' style ='margin-top:50px; margin-left:70%;'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-warning'></i> Error!</h4>
        " . $_SESSION['error'] . "
      </div>
    ";
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo "
    <div class='alert alert-success alert-dismissible' style ='margin-top:50px; margin-left:70%;'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-check'></i> Toegevoegd</h4>
        " . $_SESSION['success'] . "
      </div>
    ";
    unset($_SESSION['success']);
}
if (isset($_SESSION['warning'])) {
    echo "
      <div class='alert alert-warning alert-dismissible' style ='margin-top:50px; margin-left:70%;'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-check'></i> Deleted!</h4>
        " . $_SESSION['warning'] . "
      </div>
    ";
    unset($_SESSION['warning']);
}
