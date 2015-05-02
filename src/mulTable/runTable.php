<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<!Doctype html>
<html>
  <head>
    <title>Login Page</title>
  </head>
<body>
<form id="loginForm" method = "GET" action= "mul.php">
<input type="text" name= "min-multiplicand" value = "min-multiplicand">
<input type="text" name= "max-multiplicand" value = "max-multiplicand">
<input type="text" name= "min-multiplier" value = "min-multiplier">
<input type="text" name= "max-multiplier" value = "max-multiplier">
<input type="submit">
</form>

</body>
  </html>
