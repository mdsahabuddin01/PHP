<?php
// Default Argument Value
function myMessage($fnames, $year=1998){
  echo "$fnames, hello, there! Did you born in $year?".PHP_EOL;
}

myMessage("Anjana","1997");
myMessage("Anjana");

?>

