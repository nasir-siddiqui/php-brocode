<?php
    $age = 60;

    if( $age >= 18 && $age<=50){
        echo"You can drive";
    }
    else if ( $age>50 && $age<= 75){
        echo"Drive slow";
    }
    else{
        echo"You can't drive";
    }
?>