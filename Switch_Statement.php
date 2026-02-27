<?php
// Switch = replacement to using many else if statements ,
// more efficient , less code to write

// $grade = "A";
// switch($grade){
//     case "A" : 
//         echo "You did great";
//         break;
//     case "B" : 
//         echo "You did good";
//         break;
//     case "C" : 
//         echo "You did Ok";
//         break;
//     case "D" : 
//         echo "You did Poorly";
//         break;
//     case "F" : 
//         echo "You Failed";
//         break;
//     default :
//         echo "{$grade} is not valid";
//  }

$date = date("l");

// $date = "Tuesday";

switch ($date) {
    case "Monday":
        echo "I hate Monday's";
        break;
    case "Tuesday":
        echo "It is Tuesday";
        break;
    case "Wednesday":
        echo "The work week is off over";
        break;
    case "Thursday":
        echo "Its almost the weekend";
        break;
    case "Friday":
        echo "The weekend is here";
        break;
    case "Saturday":
        echo "Time to Party";
        break;
    case "Sunday":
        echo "Time to Rest";
        break;
    default:
        echo "{$date} Invalid Day";
}
