<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5; //global variable
    function mytest(){
        global $x;
        echo "<p> Variable x inside the function: $x </p>";
    }
    mytest();
    echo "<p> Variable x is outside of function: $x</p>";
    ?>
    </body>
</html>