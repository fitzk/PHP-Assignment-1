<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
session_start();
?>

<!DOCTYPE html>
<html>
<head><title>Login Results</title></head>
<body>
  <?php
  // user not logged in
  // user already logged in
  // New user trying to login while old user is
  // still logged in

  if(isset($_REQUEST["username"])){
    if(isset($_SESSION['username']) && $_SESSION['username'] != $_REQUEST['username']){
      echo "You can't log in <br/>";
    } elseif(isset($_SESSION['username'])){
      echo "Welcome back."."<br/>";
      echo "Log Out";
    } else {
      $_SESSION['username']=$_REQUEST['username'];
      echo "User ".$_SESSION['username']." is now logged in.<br/>";
      echo "Log Out";
      echo '<a href="logout.php">here</a>'
    }
  } else {
    if(isset($_SESSION['username'])){
      echo "Welcome back"."<br/>";
      echo "Log Out";
    } else {
      echo "you havent logged in";
      echo '<a href="login.php">login</a>'
    }
  }
  ?>
  <body>
</html>
