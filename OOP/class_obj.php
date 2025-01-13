<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit {
        //
        public $name;
        public $color;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this->color = $color;
        }
        function get_color(){
            return $this->color;
        }
    }
    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name('Apple');
    $apple->set_color('Red');
    $banana->set_name('Banana');
    $banana->set_color('Yellow');

    echo $apple->get_name();
    echo "<br>";
    echo $apple->get_color();
    echo "<br>";
    echo $banana->get_name();
    echo "<br>";
    echo $banana->get_color();
    echo "<br>";
    var_dump($apple instanceof Fruit);    

    ?>
</body>
</html>
