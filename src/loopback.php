<!-- This file should accept either a GET or POST for input. That GET or POST will have an unknown number of key/value pairs.
The page should return a JSON object (remember, this is almost identical to an object literal in JavaScript) of the
form `{"Type":"[GET|POST]","parameters":{"key1":"value1", ... ,"keyn":"valuen"}}`. Behavior if a key is passed in and
no value is specified is undefined. If no key value pairs are passed it it should return `{"Type":"[GET|POST]",
"parameters":null}`. You are welcome to use built in JSON function in PHP to produce this output. -->


<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>

<!DOCTYPE html>
<html>
<head><title>Login Results</title></head>
<body>
  <?php
  $thisArray =[
      "Type" => 0,
      "parameters"=>0
      ];
//example from PHP manual

$thisArray['Type'] = $_SERVER['REQUEST_METHOD'];

$thisArray['parameters']= $_REQUEST;

if($thisArray['parameters']==[]){
  $thisArray['parameters']= null;
}else{
  foreach($thisArray['parameters'] as $key => $value){
    if($value==""){
      $thisArray['parameters'][$key] = "undefined";
    }
  }
}
echo json_encode($thisArray);

  ?>
  <body>
</html>
