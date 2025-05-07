<?php

    // Arithmetic operators
    // + - * / ** %

    $num1 = 10;
    $num2 = 5;
    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num2 / $num1;
    $expo = $num1 ** $num2;

    echo"<h2>Aritmetics Operator:</h2>";
    echo"$sum <br>";
    echo"$sub <br>";
    echo"$mul <br>";
    echo"$div <br>";
    echo"$expo <br>";



    // Increment Decreent Operatores
    // ++ --

    echo"<h2>Increment Decreent Operatores:</h2>";
    $counter = 5;
    $counter++; // counter = counter + 1

    $dec = 20;
    $dec--; // dec = dec - 1

    echo "$counter <br>";
    echo "$dec <br>";

    // Operators precedence
    // ()
    // **
    // * / %
    // + -

    echo"<h2>Operators precedence:</h2>";

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo"1 + 2 - 3 * 4 / 5 ** 6 <br>";
    echo "$total";

?>