<?php
include "../../config/db_conn.php";
include "session.php";
session_start();
?>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a class="simple-text logo-normal">
                    IPM
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item" id="dash">
                        <a class="nav-link" href="../view/index.php">
                            <i class="material-icons">dashboard</i>
                            <p class="text-uppercase font-weight-bold space"> Dashboard</p>
                        </a>
                    </li>

                    <div id="account">
                        <li class="header text-uppercase font-weight-bold" style="margin-left: 36px; color:white; margin-top: 15px;  margin-bottom: 15px">
                            <strong>Accounts</strong>
                        </li>
                        <li class="nav-item" style="margin-top:-10px;" id="admin">
                            <a class="nav-link" href="../view/admin.php?status=0">
                                <i class="material-icons" style="font-size: 25px;">account_box</i>
                                <p class="text-uppercase space">Admin</p>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-top:-5px;" id="studenten">
                            <a class="nav-link" href="../view/studenten.php?status=0">
                                <i class="material-icons" style="font-size: 25px;">perm_identity</i>
                                <p class="text-uppercase space">Studenten</p>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-top:-5px;" id="docenten">
                            <a class="nav-link" href="../view/docenten.php?status=0">
                                <i class="material-icons" style="font-size: 25px;">portrait</i>
                                <p class="text-uppercase space">Docenten</p>
                            </a>
                        </li>


                        <li class="nav-item " style="margin-top:-5px;" id="cijferlijst">
                            <a class="nav-link" href="../view/cijfers.php?status=0">
                                <i class="material-icons"> ballot</i>
                                <p class="text-uppercase space">Cijfers</p>
                            </a>
                        </li>

                        <li class="nav-item " style="margin-top:-5px;" id="documenten">
                            <a class="nav-link" href="../view/documenten.php?status=0">
                                <i class="material-icons">attachment</i>
                                <p class="text-uppercase space">Documenten</p>
                            </a>
                        </li>
                    </div>

                    <div id="school">
                        <li class="header text-uppercase font-weight-bold" style="margin-left: 36px; color:white; margin-top: 15px; margin-bottom: 15px">
                            <strong>School</strong>
                        </li>
                        <li class="nav-item " style="margin-top:-10px;" id="roosters">
                            <a class="nav-link" href="../view/rooster.php?status=0">
                                <i class="material-icons">text_snippet</i>
                                <p class="text-uppercase space">Roosters</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-5px;" id="richting">
                            <a class="nav-link" href="../view/richtingen.php?status=0">
                                <i class="material-icons">web_asset</i>
                                <p class="text-uppercase space">Richtingen</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-5px;" id="klas">
                            <a class="nav-link" href="../view/klassen.php?status=0">
                                <i class="material-icons">list_alt</i>
                                <p class="text-uppercase space">klassen</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-5px;" id="formaties">
                            <a class="nav-link" href="../view/formaties.php?status=0">
                                <i class="material-icons">assignment_ind</i>
                                <p class="text-uppercase space">klassen Formaties</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-5px;" id="vak">
                            <a class="nav-link" href="../view/vakken.php?status=0">
                                <i class="material-icons">book</i>
                                <p class="text-uppercase space">Vakken</p>
                            </a>
                        </li>


                    </div>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- <br>  -->
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