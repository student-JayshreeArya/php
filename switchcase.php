<?php
$level = 3;
switch ($level){
    case 1:
        echo "You are playing at EASY level";
        break;
        case 2:
            echo "You are playing at MODERATE level";
            break;
            case 3:
                echo "You are playing at HARD level";
                break;
                case 4:
                    echo "You are playing at EXTREME level";
                    break;
                    default:
                    echo "Invalid Input";
                }

$Weekday = 5;                
switch ($Weekday) {
    case 1:
        echo "Today is Monday";
        break;
    
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;    
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 7:
        echo "Today is Sunday";
        break;
        default:
        echo "Enter the valid week day";

}

$age = 18;
switch (true) {
    case ($age >= 15 && $age <= 20):
        echo "You are eligible";
        break;
    
    case ($age >= 21 && $age <= 30):
        echo "You are not eligible";
        break;
        default:
        echo "Enter the valid age";
       
}
?>
