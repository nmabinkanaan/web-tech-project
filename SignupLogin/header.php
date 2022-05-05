<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>  
        <meta charset="utf-8">
        <title> GAME </title> 
        <link href="https://fonts.google.com/specimen/PT+Sans#standard-styles">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body> 
        <nav> 
            <div class="wrapper">
                <a href="index.php" > home </a></li> 

                <ul>
                     <li><a href="index.php" > home </a></li> 
                     <li><a href="discover.php" > about us </a></li> 
                     <li><a href="blog.php" > find blogs </a></li> 
                     <?php
                     if(isset($_SESSION["useruid"])){
                         echo "<li><a href='profile.php'> Profile page </a></li>";
                         echo "<li><a href='includes/logout.inc.php' > Log out </a></li>";
                     }
                     else {
                        echo "<li><a href='signup.php' > Sign Up </a></li>";
                        echo "<li><a href='login.php' > Log in </a></li>";

                     }

                     ?>
                </ul>

            </div>
        </nav> 



        <div class="wrapper">

