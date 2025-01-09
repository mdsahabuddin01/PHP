<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 5;
    var_dump($n);

    $x = "Hello world!";
    $y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
// php array

$cars = array("Volve", "BMV", "Audi");
echo "<br>Cars list:" .implode(" ,", $cars);
    ?>
</body>
</html>