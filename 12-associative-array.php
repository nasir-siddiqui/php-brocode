<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12-associative-array.php" method="post">
        <label for="country">Country</label>
        <input type="text" name="country">
        <br>
        <input type="submit">

    </form>
    
</body>
</html>



<?php
// key-value pairs
// key => value

    

    $capitals = array("India"=>"New Delhi",
                      "USA"=>"Washington DC",
                      "UAE"=>"Dubai",
                      "Japan"=>"Kyoto"
                    //   "Jaen"=>"Kyoto"
                    );

    $country = $capitals[$_POST["country"]]; 
    echo"$country";

    // $capitals["USA"] = "LA"; //change the value
    // $capitals["Jaen"]="Tokyo"; //add a new key-value pair
    // unset($capitals["USA"]); //delete a key-value pair
    // print_r($capitals); //print the array
    // $keyss = array_keys($capitals);
    // print_r($keyss);

    // $valuess = array_values($capitals);
    // print_r($valuess);

    // foreach($capitals as $key => $value){
    //     echo "<br> The capital of $key is $value <br>";

    // }

?>