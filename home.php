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
            echo "<p>Variable x inside function is: $x</p>";
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
</body>
</html>