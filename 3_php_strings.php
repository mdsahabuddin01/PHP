<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo ("<h5> Word length</h5>");
    echo strlen("Hello world!");
    #counting words
    echo ("<h5> Word count</h5>");
    echo str_word_count("Hello there!");
    
    echo ("<h5> Search For Text Within a String </h5>");
    echo strpos("The PHP strpos function searches for a specific text within a string.", "PHP");
    echo ("<h5> </h5>");
    $x = "Hello World!";
    $y = explode(" ", $x);
    
    //Use the print_r() function to display the result:
    print_r($y);
    ?>
</body>
</html>