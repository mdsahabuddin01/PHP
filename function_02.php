<?php
// Returning values
function sum($x, $y){
  $z = $x + $y;
  return $z;
}

echo " Summation of x and y: " .sum(5,5).PHP_EOL;

// PASS BY value
function changeValue($x) {
    $x = $x + 10; 
}

$number = 5;
changeValue($number); 
echo "OUTPUT IS 5: $number".PHP_EOL; // Output: 5


// PASS BY REFERENCE
function changeValue1(&$x) { 
    $x = $x + 10; 
}

$number = 5;
changeValue1($number); 
echo "OUTPUT IS : $number"; // Output: 15

?>

