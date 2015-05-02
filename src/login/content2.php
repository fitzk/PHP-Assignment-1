<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors','On');
?>
<!Doctype html>
<html>
  <head>
    <title>Login Page</title>
  </head>
<body>
  <?PHP
  $filePath = explode('/', $_SERVER['PHP_SELF'],-1);
  $filePath = implode('/',$filePath);
  $redirect= "http://" . $_SERVER['HTTP_HOST'].$filePath;

  if($_SESSION['correct'] != true){
    header("Location: {$redirect}/Login.php", true);
  }else{
    echo '<a href="content1.php">content1</a>';
  }

  ?>
</body>
  </html>
