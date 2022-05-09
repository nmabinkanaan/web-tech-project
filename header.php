<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">        
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>web-tech</title>
</head>
<body>
    <header class="site-header" style="background-color:#e8f5e9">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="tweety1.PNG" alt="" width="48" height="48">
                </a>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">                    
                    </ul>
                    <ul class="navbar-nav">
                        <?php if(isset($_SESSION["success"]) && $_SESSION["success"] != null ){ ?>                        
                        <a id="logout" class="nav-item nav-link" href="logout.php">Logout</a>
                        <?php  } else { ?>
                        <a id="login" class="nav-item nav-link" href="login.php"> <i class="fa-solid fa-user"></i>SIGNIN</a>                        
                        <a id="signin" class="nav-item nav-link" href="signup.php"> <i class="fa-solid fa-user"></i>SIGNUP</a>    
                        <?php }  ?>                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>