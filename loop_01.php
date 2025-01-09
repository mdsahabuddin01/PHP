<?php  
/*
$i = 1;

while ($i < 6) {
  echo $i. PHP_EOL; 
  $i++;
} 

// for loop

for($i=0;$i<=10;$i++){
  if($i == 3){
    echo "The number is $i". PHP_EOL;
  }
}

// foreach

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x){
  echo "$x".PHP_EOL;
}*/
// associate array 
// Keys and Values

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y){
  echo "$x : $y".PHP_EOL;
}
?>

