<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName= "dbgame";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if(!$conn){
  die("Connection failed: ");}
?>

