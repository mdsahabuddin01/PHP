<?php
//.PHP_EOL;
//Variable Number of Arguments
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i=0; $i<$len; $i++){
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo "sum of the numbers: $a";
?>

