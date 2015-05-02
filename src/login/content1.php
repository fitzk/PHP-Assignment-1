<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','On');
//code from lecture video
  $_SESSION = array();
  $filePath = explode('/', $_SERVER['PHP_SELF'],-1);
  $filePath = implode('/',$filePath);
  $redirect= "http://" . $_SERVER['HTTP_HOST'].$filePath;

// if session is not set
  if(!isset($_SESSION['username']) && !isset($_POST['username'])){
    header("Location: {$redirect}/Login.php", true);
    }
?>
<!DOCTYPE html>
<html>
<head><title>Login Results</title></head>
<body>

<?php

if(empty($_POST["username"])){
  echo "A username must be entered. Click ";
  echo '<a href="login.php">here</a>';
  echo" return to the login screen.";
}else{
  $_SESSION['username'] = $_POST["username"];
  if(!isset($_SESSION['visits'])){
    $_SESSION['visits']= 0;
    $_SESSION['correct']= true;
  }
}

if($_SESSION['correct'] == true){
  echo "<p>Hello $_SESSION[username] you have visited
  this page $_SESSION[visits] times before. Click ";
  echo '<a href="logout.php">here</a>';
  echo " to logout.</p>";
  echo '<a href="content2.php">content2</a>';
  $_SESSION['visits']++;
}
?>
  <body>
</html>
