<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>My first PHP page</h1>

    <?php
        echo "Hello World!";
        // comment
        # comment
        /*
        multi line comment
        */
    ?>
    <?php
        $x = 5;
        $y = "John";

        echo "$y is $x years old.";

        $z = 5;
        var_dump($z);

        $a = $b = $c = 10;

        function myTest(){
            echo `<p>Variable x inside function is: </p>`;
        }
        myTest();

        echo "<p>Variable x outside function is: $x</p>";
    ?>

    <?php
        $x = 5;
        $y = 10;

        function myTest2(){
            global $x, $y;
            $y = $x + $y;
        }

        myTest2();
        echo $y;
    ?>
    <?php
        print("Hello World!");
    ?>

    <h2>Data Types</h2>
    <?php
        $x = 5; // integer
        $y = 10.5; // float
        $z = "Hello"; // string
        $a = true; // boolean
        echo var_dump($x, $y, $z, $a);
    ?>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <h2>Object</h2>
    <?php
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }
          }
          
          $myCar = new Car("red", "Volvo");
          var_dump($myCar);

          echo $myCar -> message();
    ?>
</body>
</html>