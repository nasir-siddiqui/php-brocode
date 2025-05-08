<?php
    //switches

    $grade = "A";
    switch ($grade) {
        case 'A':
            echo "Excellent!";
            break;

        case 'B':
            echo "Good!";
            break;

        case 'C':
            echo "Average!";
            break;   

        case 'D':
            echo "Below Average!";
            break; 

        case 'E':
            echo "Poor!";
            break;    

        case 'F':
            echo "Fail";
            break;    

        default:
            echo "Invalid grade!";
            break;
        }



        
?>