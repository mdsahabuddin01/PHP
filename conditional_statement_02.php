<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 10;
    if ($a > 9) {
        echo "a is greater than 9";
        if ($a > 15) {
            echo "a is also greater than 15";
        } else {
            echo "<br>a is not greater than 15";
        }
    }
    ?>
</body>
</html>