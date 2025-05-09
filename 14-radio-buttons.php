<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="14-radio-buttons.php" method="post">
        <input type="radio" name="payment_option" value="visa" id="visa">
        <label for="visa">Visa</label>
        <br>
        <input type="radio" name="payment_option" value="axis" id="axis">
        <label for="axis">Axis</label>
        <br>
        <input type="radio" name="payment_option" value="cod" id="cod">
        <label for="cod">COD</label>
        <br>
        <input type="radio" name="payment_option" value="emi" id="emi">
        <label for="emi">EMI</label>
        <br>
        <input type="submit" name="confirm" Value="confirm">
    </form>
    
</body>
</html>
<?php
if(isset($_POST["confirm"])){

    if(isset($_POST["payment_option"])){

    $payment_option = $_POST["payment_option"];
    echo "You have selected : $payment_option";
    }
    else{
        echo "Please select a payment option";
    }
}
?>