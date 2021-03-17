<?php
$a = 80;
switch ($a) {
    
    case ($a < 50):
        echo "Get F";
        break;
        case ($a < 60):
            echo "Get D";
            break;
            case ($a < 70):
                echo "Get C";
                break;
                case ($a < 80):
                    echo "Get B";
                    break;
                    case ($a < 100):
                        echo "Get A";
                        break;
    default:
        echo "default";
        break;
}