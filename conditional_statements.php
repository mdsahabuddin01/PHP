<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");

if ($t < "12") {
  echo "Have a good morning!";
} elseif ($t < "15") {
  echo "Have a good afternoon!";
} elseif ($t < "22") {
  echo "Have a good evening!";
  echo " it's ". $t - 1 . " o'clock"; 
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>
