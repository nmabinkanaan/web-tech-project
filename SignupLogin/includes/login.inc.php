<?php
if(isset($_POST["submit"])){
    $username = $ـPOST["uid"];
    $pwd = $ـPOST["pwd"];
    require_once 'dph.inc.php';
    require_once 'functions.inc.php';   
    if(emptyInputLogin($username, $pwd) !== false){
        header("location : .. /login.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $username, $pwd);
}
else {
    header("location : .. /login.php");
    exit();
}