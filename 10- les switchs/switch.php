<?php 
// switch

$dice = 1;

// if($dice === 1){
//     echo " tu as fait un <br>";
// }
// if($dice === 2){
//     echo " tu as fait deux <br>";
// }

// if ($dice < 1 || $dice > 6){
//     echo " tu n'as pas jeté le dé <br>";
// }

//  else if

// if($dice === 1){
//     echo "tu as fait un <br>";
// }else if (dice === 2){
//     echo "tu as fait deux <br>";
// }else {
//     echo " tu n'as pas jeté le dé <br>";
// }

switch($dice){
    case 1 :
        echo "tu as fait un <br>";
    break;
    case 2 :
        echo "tu as fait deux <br>";
    break;
    case 3 :
        echo "tu as fait trois <br>";
    break;
    case 4 :
        echo "tu as fait quatre <br>";
    break;
    case 5 :
        echo "tu as fait cinq <br>";
    break;
    case 6 :
        echo "tu as fait six <br>";
    break;
    default:
    echo " tu n'as pas jeté le dé <br>";
    break;
}