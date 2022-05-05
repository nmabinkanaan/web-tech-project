<?php
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result;

    if (empty($name)){
        $result=true;
    }
    elseif (empty($email)){
        $result=true;
    }
    elseif (empty($username)) {
        $result=true;
    }
    elseif (empty($pwd)) {
        $result=true;
    }
    elseif (empty($pwdRepeat)) {
        $result=true;
    }
    else {
    $result=false;
    }
return $result;
}
function invalidUid($username){
    $result;
    if(!preg_match("/ˆ[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else {
        $result=false;
    }
    return $result;
}
function uidExists($conn, $username, $email){
    $sql =" SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: .. /signup.php?error=stmtfaild");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES ('$name', '$email', '$uid', ' $pwd');";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: .. /signup.php?error=stmtfaild");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ssss", $name, $email, $username, $hashedPwd );
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
    header("location: .. /signup.php?error=none");
    exit();
}
function emptyInputLogin($username, $pwd){
    $result;
    if(empty($username) || empty($pwd) ){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if ($uidExists === false){
        header("location: ../login.php?error=wrnonglogi");
        exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

     if ($checkPwd === false){
        header("location: ../login.php?error=wrnonglogi");
        exit();
     }
     else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}