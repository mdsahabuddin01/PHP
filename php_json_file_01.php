
Result Size: 918 x 914
<!DOCTYPE html>
<html>
<body>
​
<?php
// json_encode() 
//encode an associative array into a JSON object:
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
​
echo json_encode($age);

//to encode an indexed array into a JSON array:
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?>
​
</body>
</html>
​
{"Peter":35,"Ben":37,"Joe":43}
