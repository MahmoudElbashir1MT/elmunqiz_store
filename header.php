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
  
        <nav class="navbar navbar-inverse navabar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <?php 
                
                
                ?>
                    <a href="index.php" class="navbar-brand">Elmunqize</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($_SESSION['email'])) {
                        ?>
                            <li><a href="cart/cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        <?php
                        } else {
                        ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
   