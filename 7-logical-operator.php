<?php
    // &&
    // ||
    // !=

    $temp = 31;
    $cloudy = true;

    // if($temp >= 0 && $temp <= 40){
    //     echo "Temperature is GOOD";
    // }
    // else{
    //     echo "Temperature is BAD";
    // }

    // if($temp < 0 || $temp > 40){
    //     echo "Temperature is BAD";
    // }
    // else{
    //     echo "Temperature is GOOD";
    // }

    // if(!$cloudy){
    //     echo"<br> Its cloudy";
    // }
    // else{
    //     echo"<br> Its Sunny";
    // }

    $child = false;
    $adult = true;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 50;
        echo "Your ticket price is {$ticket} rs ";
    }
    else{
        $ticket = 100;
        echo "Your ticket price is {$ticket} rs ";

    }
?>