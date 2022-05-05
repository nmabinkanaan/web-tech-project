<?php
if (isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    require_once 'dph.inc.php';
    require_once 'functions.inc.php';
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?signup=success");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ../signup.php?signup=success");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?signup=success");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../signup.php?signup=success");
        exit();
    }
    if (uidExists($conn, $username) !== false){
        header("location: ../signup.php?signup=success");
        exit();
    }
    createUser($conn, $name, $email, $username, $pwd);
}
else{
    header("location: ../signup.php?signup=success");
    exit();
}