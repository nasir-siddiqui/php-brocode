<?php
// Array

    $foods = array("apple", "banana", "chikoo", "dates", "fig");
    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";
    // echo $foods[4] . "<br>";
    // // echo $foods[5] . "<br>";

    // array_push($foods, "mango", "orange"); // add elements in the end of array
    // array_pop($foods); // remove last element
    // array_shift($foods);  // remove first element
    // array_unshift($foods, "grapes"); // add element in the beginning of array
    echo count($foods) . "<br>";

    // to display all array 
    foreach($foods as $food){
        echo "$food <br>";
    }

?>