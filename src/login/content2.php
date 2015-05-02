<?php
session_start();
// error_reporting(E_ALL);
// ini_set('display_errors','On');
$filePath = explode('/', $_SERVER['PHP_SELF'],-1);
$filePath = implode('/',$filePath);
$redirect= "http://" . $_SERVER['HTTP_HOST'].$filePath;

if(!isset($_SESSION['username'])){
  header("Location: {$redirect}/Login.php", true);
}
?>
<!Doctype html>
<html>
  <head>
    <title>Content Two</title>
  </head>
<body>
  <?php
    echo '<a href="content1.php">content1</a>';
  ?>
</body>
  </html>
