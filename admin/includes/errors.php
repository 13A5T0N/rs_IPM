<?php
$status = $_GET["status"];
switch ($status) {
    case '0':
        break;
    case '1':
        echo "<script type='text/javascript'>  welcome() </script>";
        break;
    case '2':
        echo "<script type='text/javascript'>  reset() </script>";
        break;
    case '3':
        echo "<script type='text/javascript'>  admin_ad()  </script>";
        break;
    case '4':
        echo "<script type='text/javascript'>  admin_edit()  </script>";
        break;
    case '5':
        echo "<script type='text/javascript'>  admin_delete()  </script>";
        break;
    case '6':
        echo "<script type='text/javascript'>  student_ad()  </script>";
        break;
    case '7':
        echo "<script type='text/javascript'>  student_import()  </script>";
        break;
    case '8':
        echo "<script type='text/javascript'>   student_edit() </script>";
        break;
    case '9':
        echo "<script type='text/javascript'>   student_delete() </script>";
        break;
    case '10':
        echo "<script type='text/javascript'>   student_delete() </script>";
        break;
    case '11':
        echo "<script type='text/javascript'>   student_delete() </script>";
        break;
    case '12':
        echo "<script type='text/javascript'>   student_delete() </script>";
        break;

}

