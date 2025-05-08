<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9-for.php" method="post">
        <label for="num">Enter Number: </label>
        <input type="text" name="num"> <br>
        <input type="submit">
    </form>
    
</body>
</html>
<?php

    $num = $_POST["num"];

    //up
    // for($i = 1; $i <= $num ; $i++){
    //     echo "$i <br>";
    // }

    //down
    for($i = $num; $i >= 1 ; $i--){
        echo "$i <br>";
    }

//for loop
    // for($i=0; $i<10 ; $i++){
    //     echo "Hello $i<br> ";
    // }

    // for($i=10; $i>=0 ; $i--){
    //     echo "Hello $i<br> ";
    // }

    // for($i=1; $i<=10 ; $i++){
    //     $sum = 5* $i;
    //     echo "5 X $i = $sum <br> ";
    // }

    // for($i=10; $i>0 ; $i--){
    //     $sum = 5* $i;
    //     echo "5 X $i = $sum <br> ";
    // }

    // for($i=1; $i<=10 ; $i+=5){
    //     // $sum = 5* $i;
    //     echo "5 X $i = $i <br> ";
    // }

    // for($i=0; $i<10 ; $i++){
    //     echo "Hello $i<br> ";
    // }

?>