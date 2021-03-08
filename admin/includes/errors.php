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
        echo "<script type='text/javascript'>   docent_ad() </script>";
        break;
    case '11':
        echo "<script type='text/javascript'>   docent_edit() </script>";
        break;
    case '12':
        echo "<script type='text/javascript'>   docent_delete() </script>";
        break;
    case '13':
        echo "<script type='text/javascript'>   cijfer_ad() </script>";
        break;
    case '14':
        echo "<script type='text/javascript'>   document_ad() </script>";
        break;
    case '15':
        echo "<script type='text/javascript'>   document_delete() </script>";
        break;
    case '16':
        echo "<script type='text/javascript'>   rooster_ad() </script>";
        break;
    case '17':
        echo "<script type='text/javascript'>   rooster_delete() </script>";
        break;
    case '18':
        echo "<script type='text/javascript'>   richting_ad() </script>";
        break;
    case '19':
        echo "<script type='text/javascript'>   richting_edit() </script>";
        break;
    case '20':
        echo "<script type='text/javascript'>   richting_delete() </script>";
        break;
    case '21':
        echo "<script type='text/javascript'>   klas_ad() </script>";
        break;
    case '22':
        echo "<script type='text/javascript'>   klas_edit() </script>";
        break;
    case '23':
        echo "<script type='text/javascript'>   klas_delete() </script>";
        break;
    case '24':
        echo "<script type='text/javascript'>   formatie_ad() </script>";
        break;
    case '25':
        echo "<script type='text/javascript'>   vak_ad() </script>";
        break;
    case '26':
        echo "<script type='text/javascript'>   vak_delete() </script>";
        break;
    case '27':
        echo "<script type='text/javascript'>   vak_edit() </script>";
        break;
}
