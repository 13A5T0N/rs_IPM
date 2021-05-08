<?php
include "../../config/db_conn.php";
include "session.php";
session_start();
?>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a class="simple-text logo-normal">
                    IPM
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item" style="margin-top:-5px;" id="dash">
                        <a class="nav-link" href="../view/index_stud.php">
                            <i class="material-icons">dashboard</i>
                            <p class="text-uppercase font-weight-bold space"> Profiel</p>
                        </a>
                    </li>

                    <li class="nav-item " style="margin-top:-5px;" id="cijferlijst">
                        <a class="nav-link" href="../view/cijfers.php">
                            <i class="material-icons"> ballot</i>
                            <p class="text-uppercase font-weight-bold space">Cijfers</p>
                        </a>
                    </li>

                    <li class="nav-item " style="margin-top:-5px;" id="documenten">
                        <a class="nav-link" href="../view/documenten.php">
                            <i class="material-icons">attachment</i>
                            <p class="text-uppercase font-weight-bold space">Documenten</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">Account</p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="../../student/backend/logout.php">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->