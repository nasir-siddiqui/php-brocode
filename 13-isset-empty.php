<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="13-isset-empty.php" method="post">
        <label for="uname">Username:</label>
        <input type="text" name="uname">
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass">
        <br>
        <input type="submit" value="LOGIN" name="login">
        <br>
    </form>
    
</body>
</html>


<?php

    // foreach($_POST as $key => $value){
    //     echo "$key = $value <br>";
    // }

    if(isset($_POST["login"])){
        // echo "You tried to login";
        $username = $_POST["uname"];
        $password = $_POST["pass"];

        if(empty($username)){
            echo"Username is missing";
        }
        elseif(empty($password)){
            echo"Pasword is missing";
        }
        else{
            echo "Hello, $username";
        }
    }



// isset() - returs true if a variable is declared and not null
//  empty() - returns TRUE if a variable is not declared , fasle null and ""


    // $username = "nasme";
    // if(isset($username)){
    //     echo "This variable is set";
    // }
    // else{
    //     echo "This variable is not set";
    // }

    // $username = "io";
    // if(empty($username)){
    //     echo "This variable is empty";
    // }
    // else{
    //     echo "This variable is not empty";
    // }
    

?>