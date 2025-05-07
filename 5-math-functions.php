<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Math Functions:</h1>

    <!-- Learning form -->
    <!-- <h2>Learning Form</h2>
    <form action="5-math-functions.php" method="post">
        <label for="num1">Num1:</label> 
        <input type="text" name="num1"> <br>
        <br>
        <label for="num2">Num2:</label> 
        <input type="text" name="num2"> <br><br>
        <label for="num3">Num3:</label> 
        <input type="text" name="num3"> <br><br>

        <input type="submit" value="Calculate">
    </form> 
<br><br><br>-->

    <!--  -->
<h2>Form 2</h2>
    <form action="5-math-functions.php" method="post">
        <label for="radius">Radius:</label>
        <input type="text" name="radius">

        <br><br>
        <input type="submit" value="Submit">
    </form>

    
</body>
</html>
<?php
    // $num1 = $_POST["num1"];
    // $num2 = $_POST["num2"];
    // $num3 = $_POST["num3"];

    // $calc = abs($num1); //make positive
    // $calc = round($num1); //round figure
    // $calc = floor($num1); //ignore num after points
    // $calc = ceil($num1); //round up to bigger possible number
    // $calc = sqrt($num1); //square root

    // $calc = pow($num1, $num2); //num1 power num2

    // $calc = max($num1, $num2, $num3); // return maximum value betwen multiple numbers
    // $calc = min($num1, $num2, $num3); // return miniimum value betwen multiple numbers

    // $calc = pi(); //return pi value 3.14
    // $calc = rand(1, 10); //returs random number (min, max)

    // echo $calc;


    // -------------------------------------

    $radius = $_POST["radius"];

    $diameter = 2 * $radius; // 2*r
    $circumference = round(2 * pi() * $radius, 3); //2*pi*r
    $area = round(pi() * sqrt($radius), 2); // pi * r*r
    $volume = round(4/3 * pi() * pow($radius, 3), 2) ; // (4/3)*pi* r*r*r

    echo "Diameter : {$diameter} cm <br>";
    echo "Circumference: {$circumference} cm <br>";
    echo "Area : {$area} square <br>";
    echo "Volume : {$volume} cube <br>";


?>