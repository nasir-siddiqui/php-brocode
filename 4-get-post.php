

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM</h1>
    <h2>Login Form</h2>
    <!-- <form action="4-get-post.php" method="get"> -->
    <form action="4-get-post.php" method="post">
        <label for="uname">Username:</label><br>
        <input type="text" name="uname" id="uname"><br>

        <label for="pass">Password:</label> <br>
        <input type="password" name="pass" id="pass"> <br> <br>

        <input type="submit" value="SUBMIT">
    </form>

    <hr>

    <h2>Order Pizza Form:</h2>
    <form action="4-get-post.php" method="post">
        <label for="qty">Quantity:</label> <br>
        <input type="text" name="qty"> <br><br>
        <input type="submit" value="Calculate">
</form>
    
</body>
</html>
<?php

    // Login Form (form 1)
    // $_GET
    // echo "{$_GET["uname"]} <br>" ;
    // echo "{$_GET["pass"]} <br>" ;
  
    // $_POST
    // echo "{$_POST["uname"]} <br>";
    // echo "{$_POST["pass"]} <br>";


    // $_GET, $_POST 
    //    special variables used to collect data from HTML form
    //    data is sent to the file in the ction attribute of <form>
    //    <form action="file.php" method ="get" >

    /* $_GET 
        Data is appended to the url
        NOT SECURE
        char limit
        Bookmark is possible with values
        GET requests can be cached
        Beter for search pages
    */

    /* $_POST
        Data is sent in the body of the HTTP request
        SECURE
        No char limit
        Bookmark is not possible with values
        POST requests are not cached
        Better for login pages
    */


    // Order Form (form 2)
    $item = "pizza";
    $price = 10;
    $qty = $_POST["qty"];
    $total = $price * $qty;

    echo "You ordered $qty $item(s) for a total of \${$total}";

?>