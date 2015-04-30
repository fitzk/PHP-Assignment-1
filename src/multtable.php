<!-- This file should accept 4 parameters passed via the URL in a GET request.

  - min-multiplicand
  - max-multiplicand
  - min-multiplier
  - max-multiplier
http://chrome-warrior-75-222926.usw1-2.nitrousbox.com/multtable.php?min-multiplicand=6&max-multiplicand=20&min-multiplier=1

It should check than the min is in fact less than or equal to the max
 multiplicand and multiplier respectively. If it is not, it should print the
  message "Minimum [multiplicand|multiplier] larger than maximum.". It should
  also check that the values returned are integers for each parameter. If it is
  not it should print 1 message for each invalid input
  "[min-multiplicand...max-multiplier]
  must be an integer.". It should check that all 4 parameters exist for each
  missing parameter it should print "Missing parameter [min-multiplicand ...
  max-multiplier].".

If all of the above conditions are met, it should produce a multiplication table
 that is (max-multiplicand - min-multiplicand + 2) tall and
 (max-multiplier - min-multiplier + 2) wide. The upper left cell should be
 empty. The left column should have integers running from min-multiplicand
 through max-multiplicand inclusive. The top row should have integers running
 from min-multiplier to max-multiplier inclusive. Every cell within the table
 should be the product of the corresponding multiplicand and multiplier.

To accomplish the above task you will want to work with loops to dynamically
 create rows and within each row, loop to create the cells. It should output
 as a valid HTML5 document. -->
<?php

//check for empty parameter
if(empty( $_GET['min-multiplicand'])||empty($_GET['max-multiplicand'])||empty($_GET['min-multiplier'])|| empty($_GET['max-multiplier']) ){
  echo "Missing parameter ";

  if(empty($_GET['min-multiplicand'])){
    echo "min-multiplicand ";
  }

  if(empty($_GET['max-multiplicand'])){
    echo "max-multiplicand ";
  }

  if(empty($_GET['min-multiplier'])){
    echo "min-multiplier ";
  }

  if(empty($_GET['max-multiplier'])){
    echo "max-multiplier ";
  }
}


//assign to variables
$min_cand = isset($_GET['min-multiplicand']) ? $_GET['min-multiplicand'] : ' ';
$max_cand = isset($_GET['max-multiplicand']) ? $_GET['max-multiplicand'] : ' ';
$min_plier = isset($_GET['min-multiplier']) ? $_GET['min-multiplier'] : ' ';
$max_plier = isset($_GET['max-multiplier']) ? $_GET['max-multiplier'] : ' ';

//Check for integer
if(ctype_digit($min_cand) != true){
//  $type = gettype($min_cand);
  echo "Min-multiplicand must be an integer! ";
}else{
  $min_cand = (int)$min_cand;
}

if(ctype_digit($max_cand) != true){
    echo "Max-multiplicand must be an integer!";
}else{
  $max_cand = (int)$max_cand;
}

if(ctype_digit($min_plier) != true){
    echo "Min-multiplier must be an integer!";
}else{
   $min_plier = (int)$min_plier;
}

if(ctype_digit($max_plier) != true){
    echo "Max-multiplier must be an integer!";
}else{
     $max_plier = (int)$max_plier;
}


// It should check than the min is in fact less than or equal to the max
//  multiplicand and multiplier respectively. If it is not, it should print the
//   message "Minimum [multiplicand|multiplier] larger than maximum.".

//  It should
//   also check that the values returned are integers for each parameter. If it is
//   not it should print 1 message for each invalid input
//   "[min-multiplicand...max-multiplier]
//   must be an integer.".


?>
