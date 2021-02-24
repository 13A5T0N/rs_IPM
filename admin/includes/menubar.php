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
                            <p style="font-size: 15px;"> Dashboard</p>
                        </a>
                    </li>

                    <div id="account">
                        <li class="header" style="margin-left: 15px; color:white; margin-top: 15px">
                            <strong>Accounts</strong>
                        </li>
                        <li class="nav-item" style="margin-top:-15px;" id="admin">
                            <a class="nav-link" href="../view/admin.php">
                                <i class="material-icons" style="font-size: 25px;">account_box</i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-top:-25px;" id="studenten">
                            <a class="nav-link" href="../view/studenten.php">
                                <i class="material-icons" style="font-size: 25px;">perm_identity</i>
                                <p>Studenten</p>
                            </a>
                        </li>
                        <li class="nav-item" style="margin-top:-25px;" id="docenten">
                            <a class="nav-link" href="../view/docenten.php">
                                <i class="material-icons" style="font-size: 25px;">portrait</i>
                                <p>Docenten</p>
                            </a>
                        </li>
                    </div>

                    <li class="nav-item " id="cijferlijst">
                        <a class="nav-link" href="../view/cijfers.php">
                            <i class="material-icons"> ballot</i>
                            <p>Cijfers</p>
                        </a>
                    </li>

                    <li class="nav-item " id="documenten">
                        <a class="nav-link" href="../view/documenten.php">
                            <i class="material-icons">attachment</i>
                            <p>Documenten</p>
                        </a>
                    </li>

                    <div id="school">
                        <li class="header" style="margin-left: 10px; color:white; margin-top: 15px">
                            <strong>Logistics</strong>
                        </li>
                        <li class="nav-item " style="margin-top:-15px;" id="roosters">
                            <a class="nav-link" href="../view/rooster.php">
                                <i class="material-icons">text_snippet</i>
                                <p>Roosters</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-25px;" id="richting">
                            <a class="nav-link" href="../view/richtingen.php">
                                <i class="material-icons">web_asset</i>
                                <p>Richtingen</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-25px;" id="klas">
                            <a class="nav-link" href="../view/klassen.php">
                                <i class="material-icons">list_alt</i>
                                <p>klassen</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-25px;" id="formaties">
                            <a class="nav-link" href="../view/formaties.php">
                                <i class="material-icons">assignment_ind</i>
                                <p>klassen Formaties</p>
                            </a>
                        </li>
                        <li class="nav-item " style="margin-top:-25px;" id="vak">
                            <a class="nav-link" href="../view/vakken.php">
                                <i class="material-icons">book</i>
                                <p>Vakken</p>
                            </a>
                        </li>


                    </div>

                    <!-- <li class="nav-item ">
                        <a class="nav-link" href="../view/settings.php">
                            <i class="material-icons">settings</i>
                            <p>Settings</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <!-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
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
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">Some Actions</p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">Account</p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->
            <!-- End Navbar -->
