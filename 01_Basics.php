<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php

        define('PI', 3.14);   //CONSTANT

        echo "This is printed using php.";
        $var = 10;
        $var1 = 20;
        echo $var;
        echo $var1;

        echo "<br>";
        echo "<h1>Operators</h1>";  //html tags can be inseted using echo

        //Arithmetic operator
        echo "<br>";
        echo "The sum is: ";
        echo $var1 + $var;

        //Assignment operator
        echo "<br>";
        $var2 = $var1;
        $var2 += 2;
        echo "The var is: ";
        echo $var2;
        echo "<br>";

        //Comparison operator
        echo "The value of 1==4 is: ";
        echo var_dump(1==4);         // says about the type of variable
        echo "<br>";
        echo "The value of 1<=4 is: ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "The value of 1>=4 is: ";
        echo var_dump(1>=4);
        echo "<br>";

        //Increment/Decrement operator
        echo $var++;
        echo "<br>";
        echo ++$var;
        echo "<br>";
        echo --$var;
        echo "<br>";
        echo $var--;
        echo "<br>";
        echo $var;
        echo "<br>";
        
        //Logical operator
        $myVar = (true and true);
        echo var_dump($myVar);
        echo "<br>";
        $myVar = (true xor true);
        echo var_dump($myVar);
        echo "<br>";
        $myVar2 = (true or false);
        echo var_dump($myVar2);
        echo "<br>";

        //Data Types

        echo "<br><h1>Data Types</h1><br>";

        $var3 = "Aishwarya";
        echo var_dump($var3);
        echo "<br>";

        $var3 = true;
        echo var_dump($var3);
        echo "<br>";

        echo PI;
        ?>
    </div>
</body>
</html>