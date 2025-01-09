<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$color = "Orange";
switch ($color) {
    case "Blue":
        echo "Your favorite color is Blue!";
        break;
    case "Red":
        echo "Your favorite color is Red!";
        break;
    default:
        echo "Your favorite color is neither Blue nor Red! But $color";
}
?>
</body>
</html>