<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="<?php echo ASSETS; ?>/img/lifestyleStore.png" />
    <title>Elmonqize</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- External CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" type="text/css">
</head>

<body>
    <?php if (isset($_SESSION['email'])) {
    ?>
        <nav class="navbar navbar-inverse navabar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo BURLA; ?>" class="navbar-brand">Elmunqize</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav navbar-left ">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Admins
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo BURLA; ?>admins/new.php">New</a></li>
                                <li><a href="<?php echo BURLA; ?>admins/viewAll.php">View All </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Categories
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo BURLA; ?>Category/new.php">New</a></li>
                                <li><a href="<?php echo BURLA; ?>Category/viewAll.php">View All </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Product
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo BURLA; ?>Product/new.php">New</a></li>
                                <li><a href="<?php echo BURLA; ?>Product/viewAll.php">View All </a></li>
                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Cart
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">New</a></li>
                                <li><a href="#">View All </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="<?php echo BURL; ?>logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav><?php
            }
                ?>