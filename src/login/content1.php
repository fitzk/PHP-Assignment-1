

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
  //code from lecture video
  $_SESSION = array();
  $filePath = explode('/', $_SERVER['PHP_SELF'],-1);
  $filePath = implode('/',$filePath);
  $redirect= "http://" . $_SERVER['HTTP_HOST'].$filePath;

// if session is not set
  if(!isset($_SESSION['username'])){
    if(isset($_POST['username'])){
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
    }else{
      header("Location: {$redirect}/Login.php", true);
    }
  }

// if session is set
if(isset ( $_SESSION['username'] )){
  if($_SESSION['correct'] == true){
    echo "<p>Hello $_SESSION[username] you have visited
    this page $_SESSION[visits] times before. Click ";
    echo '<a href="logout.php">here</a>';
    echo " to logout.</p>";
    echo '<a href="content2.php">content2</a>';
    $_SESSION['visits']++;
  }else{
    header("Location: {$redirect}/Login.php", true);
  }
}

  ?>
  <body>
</html>