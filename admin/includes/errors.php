<?php
<<<<<<< HEAD
if (isset($_SESSION['error'])) {
  // echo "
  //     <div class='alert alert-danger alert-dismissible' role='alert' style ='margin-top:45%; margin-left:85%;'>
  //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //       <h3><i class='icon fa fa-warning' style ='color: white;></i> Error!</h3>
  //       " . $_SESSION['error'] . "
  //     </div>
  //   ";
  unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
  // echo "
  //   <div class='alert alert-success alert-dismissible' role='alert' style ='margin-top:45%; margin-left:85%;'>
  //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //       <h3><i class='icon fa fa-check' style ='color: white;></i> Toegevoegd</h3>
  //       " . $_SESSION['success'] . "
  //     </div>
  //   ";
  unset($_SESSION['success']);
}
if (isset($_SESSION['warning'])) {
  // echo "
  //     <div class='alert alert-warning alert-dismissible' role='alert' style ='margin-top:45%; margin-left:85%;'>
  //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  //       <h3><i class='icon fa fa-check' style ='color: white;></i> Deleted!</h3>
  //       " . $_SESSION['warning'] . "
  //     </div>
  //   ";
=======
if (isset($_SESSION["error"])) {
  echo "
      <div class='alert alert-danger alert-dismissible' role='alert' style ='margin-top:45%; margin-left:85%;'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h3><i class='icon fa fa-warning' style ='color: white;'></i> Error!</h3>
        " . $_SESSION["error"] . "
      </div>
    ";
  unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
  echo "
    <div class='alert alert-success alert-dismissible' role='alert' style ='margin-top:45%; margin-left:85%;'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h3><i class='icon fa fa-check' style ='color: white;'></i> Toegevoegd</h3>
        " . $_SESSION['success'] . "
      </div>
    ";
  unset($_SESSION['success']);
}
if (isset($_SESSION['warning'])) {
  echo "
      <div class='alert alert-warning alert-dismissible' role='alert' style ='margin-top:45%; margin-left:85%;'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h3><i class='icon fa fa-check' style ='color: white;'></i> Deleted!</h3>
        " . $_SESSION['warning'] . "
      </div>
    ";
>>>>>>> bed1578ce390468b56f7e293f957b2d24c9eaa55
  unset($_SESSION['warning']);
}
