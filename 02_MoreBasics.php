<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<style>
    *{
        margin: auto;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: pink;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>PHP</h1>
        <?php
        echo "<h1>Decision Making</h1><br>";
        $age = 18;
        if($age >= 18){
            echo "You are eligible to vote";
        }
        else
        echo "You are not eligible to vote";

        echo "<br><h1>Arrays</h1><br>";
        $languages = array("JS", "Pyhton", "Java", "C++");
        echo $languages[2];
        echo "<br>";
        echo count($languages);

        echo "<br><h1>Loops</h1><br>";
        $i = 0;

        //while

        while($i < count($languages)){
            echo $languages[$i];
            echo "<br>";
            $i++;
        }

        //do while
        $i = 0;
        do{
            echo $languages[$i];
            echo "<br>";
            $i++; 
        }while($i < count($languages));

        //for

        for ($a=0; $a < 5; $a++) { 
            echo $a;
        }

        //for each loop

        foreach($languages as $value){        //to iterate array
            echo "<br>The value of each loop is: ";
            echo $value;
        }

        echo "<br><h1>Functions</h1><br>";

        function printNum($number){
             echo "<br>The number is: ";
             echo $number;
        }

        printNum(24);

        ?>
    </div>
</body>
</html>