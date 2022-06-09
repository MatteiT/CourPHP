<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>la base</title>
</head>
<body>
    <?php 
    echo " <h1>hello world</h1>";
    //commentaire ligne
    $age = "29ans";
    $name = "Tristan";

    echo " <p>il était une fois un homme nommé $name</p> <br>";
    echo " <p>Il avait 29 ans </p> <br>";

    $name = "thomas";

    echo " <p>il aimait vraiment le prénom $name</p>";
    echo " <p>Mais il n'aimait pas avoir $age</p>";

    echo "<hr>";

    //les différents type de variables
    //les strings

    $phrase = "être ou ne pas être";

    //les numbers 
    // les integer (nombres entiers)
    $age = 30;

    //les decimals (decimaux)
    $temperature = 30.2;

    //les boleans (bouléen)
    $isMlae = true;

    //null (pas de valeurs)
    $php = null;

    echo "hello <br>";
    echo 4.57; 
    echo "<br>";
    echo $phrase;

    echo "<br>";

    //string
    echo "<h2>les chaines de caractères</h2>";
    
    $phrase = "Formation DWWM";
    echo $phrase;
    echo "<br>";
    echo strtolower($phrase);
    echo "<br>";
    echo strtoupper($phrase);
    echo "<br>";
    echo strlen($phrase);
    echo "<br>";
    echo $phrase[0];
    echo "<br>";
    echo str_replace("DWWM", "Ninja", $phrase);
    echo "<br>";
    echo substr($phrase, 10);
    echo "<br>";
    echo substr($phrase, 10, 1);// le 1 est pour juste un caractère apres
    echo "<br>";
    
    //Les nombres
    echo "<h2>les nombre</h2>";

    echo -40.847;
    echo "<br>";
    echo 5 + 9; 
    echo "<br>";
    echo 5.7 * 9;
    echo "<br>";
    echo 5.7 / 3;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    echo 4 + 5 * 10;
    echo "<br>";
    echo (4 + 5)*10;
    echo "<br>";
    
    $num = 10;
    echo "<br>";
    echo $num;
    echo "<br>";
    $num++;
    echo "<br>";
    echo $num;
    echo "<br>";
    $num--;
    echo "<br>";
    echo $num;
    echo "<br>";
    
    $num = $num + 25;
    echo "<br>";
    echo $num;
    echo "<br>";
    $num += 25;    
    echo "<br>";
    echo $num;
    echo "<br>";

    //les fonctions des numbres

    echo abs(-100);
    echo "<br>";
    echo pow(2, 4);
    echo "<br>";
    echo sqrt(144);
    echo "<br>";
    echo 12**2;
    echo "<br>";
    echo max(2, 10);
    echo "<br>";
    echo min(2, 10);
    echo "<br>";
    echo round(3.5);
    echo "<br>";
    echo ceil(3.4);
    echo "<br>";
    echo floor(3.7);
    echo "<br>";

     ?>
</body>
</html>