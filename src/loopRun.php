<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
session_start();
?>
<!Doctype html>
<html>
  <head>
    <title>Login Page</title>
  </head>
<body>
<form id="loginForm" method = "GET" action= "loopback.php">
<input type="text" name= "a">
<input type="text" name= "b">
<input type="submit">
</form>

</body>
  </html>
