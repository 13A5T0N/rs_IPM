<?php

if (isset($_GET["status"])) {
    $satus = $_GET["status"];
    switch ($satus) {
        case '0':
            echo "<script type='text/javascript'> error() </script>';";
            break;
        case '1':
            echo "<script type='text/javascript'>  warnig() </script>';";
            break;
        case '3':
            echo "<script type='text/javascript'>  pasw() </script>';";
            break;
        case '3':
            echo "<script type='text/javascript'>  unkown() </script>';";
            break;
    }
    if ($satus == 0) {
    } else {
    }
} else {
}
