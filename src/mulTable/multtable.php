<!--

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
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="./table.css">
</head>
<body>

<?php
//check parameters are
function checkParams(){

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
    return false;
  }
  return true;
}


//Check for integer
function checkType(&$min_cand,&$max_cand,&$min_plier,&$max_plier){
  $bool= true;
  if(ctype_digit($min_cand) != true){
    echo "Min-multiplicand must be an integer! ";
    $bool = false;
  }else{
    $min_cand = (int)$min_cand;
  }

  if(ctype_digit($max_cand) != true){
      echo "Max-multiplicand must be an integer!";
    $bool = false;
  }else{
    $max_cand = (int)$max_cand;
  }

  if(ctype_digit($min_plier) != true){
      echo "Min-multiplier must be an integer!";
    $bool = false;    $bool = false;
  }else{
     $min_plier = (int)$min_plier;
  }

  if(ctype_digit($max_plier) != true){
      echo "Max-multiplier must be an integer!";
    $bool = false;
  }else{
       $max_plier = (int)$max_plier;
  }
  return $bool;
}


//checks min < max
function checkMins($min_cand, $max_cand, $min_plier, $max_plier){
  $bool = true;
  if($min_cand > $max_cand){
    echo "Minimum multiplicand larger than maximum.";
    $bool = false;
  }
  if($min_plier > $max_plier){
    echo "Minimum multiplier larger than maximum.";
    $bool = false;
  }
  return $bool;
}

$rCheckParams = checkParams();
//assign to variables
$min_cand = isset($_GET['min-multiplicand']) ? $_GET['min-multiplicand'] : ' ';
$max_cand = isset($_GET['max-multiplicand']) ? $_GET['max-multiplicand'] : ' ';
$min_plier = isset($_GET['min-multiplier']) ? $_GET['min-multiplier'] : ' ';
$max_plier = isset($_GET['max-multiplier']) ? $_GET['max-multiplier'] : ' ';

$rCheckType= checkType($min_cand, $max_cand, $min_plier, $max_plier);
$rCheckMins= checkMins($min_cand, $max_cand, $min_plier, $max_plier);

if($rCheckParams == true and $rCheckType == true and $rCheckMins == true){


  echo "<p> MULTIPLICATION TABLE </p>";
  echo "<table style='border: 1px solid black'
     'border-collapse: collapse'
     'background-color: linen'
     'padding: 5px'>";

  for($i = 0; $i < $max_cand - $min_cand + 2; $i = $i + 1){
    echo "<tr>";

    for($j = 0; $j < $max_plier - $min_plier + 2; $j= $j+1){

      if($i == 0){
        if($j==0){
          echo "<td></td>";
        }elseif($j > 0){
          echo "<td>".$j."</td>";
        }
      }
      else{
        if($j == 0){
          echo "<td>".$i."</td>";
        }else{
        echo "<td>".$j*$i."</td>";
        }
      }
    }
    echo "</tr>";
  }
  echo"</table>";
  //echo "<table><tr><td>first row</td></tr><tr></tr></table>";


}
?>
</body>
</html>
