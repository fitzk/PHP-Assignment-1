<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
session_start();
$_SESSION = array();
?>
<!Doctype html>
<html>
  <head>
    <title>Login Page</title>
  </head>
<body>
<form id="loginForm" method = "POST" action= "content1.php">
<input type="text" name= "username">
<input type="submit">
</form>

</body>
  </html>
