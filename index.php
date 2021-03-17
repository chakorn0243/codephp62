<?php

function a($score = 100)
{
switch ($score) 
{

    case ($score < 50):
        echo "ได้เกรด F";
       break;
    case ($score <55):
        echo "ได้เกรด D";
        break;
    case ($score <60):
        echo "ได้เกรด D+";
        break;
    case ($score <65):
        echo "ได้เกรด C";
        break;
    case ($score <70):
        echo "ได้เกรด C+";
        break; 
    case ($score <75):
        echo "ได้เกรด B";
        break;   
        
    case ($score < 80):
        echo "ได้เกรด B+";
        break;

        case ($score < 101 && $score >79):
            echo "ได้เกรด A";
            break;

    default:
        echo "คุณเทพเกินไปเเล้ว";

    }
    echo "<br>";
    return $score;

}
echo "<br>";

echo a()


?>

