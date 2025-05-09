<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="15-checkboxes.php" method="post">
        <input type="checkbox" name="drink_list[]" id="milk_tea" value="Milk Tea">
        <label for="milk_tea">Milk Tea</label>
        <br>
        <input type="checkbox" name="drink_list[]" id="black_tea" value="Black Tea">
        <label for="black_tea">Black Tea</label>
        <br>
        <input type="checkbox" name="drink_list[]" id="cold_coffee" value="Cold Coffee">
        <label for="cold_coffee">Cold Coffee</label>
        <br>
        <input type="checkbox" name="drink_list[]" id="hot_coffee" value="Hot Coffee">
        <label for="hot_coffee">Hot Coffee</label>
        <br>
        <input type="checkbox" name="drink_list[]" id="lemonade" value="Lemonade">
        <label for="lemonade">Lemonade</label>
        <br>

    <input type="submit" name="order" value="Order">
    <br>
    </form>
    
</body>
</html>
<?php

// $order = $_POST["order"];
// echo "$order";

    if(isset($_POST["order"]))
    {
        if(isset($_POST["drink_list"])){
        $drink_list = array_values($_POST["drink_list"]);
            
        echo "You have order: " . implode(", ", $drink_list);
        // implode() function converts an array into a string
        }
        else{
            echo "Please select a drink.";
        }

    }

    
?>