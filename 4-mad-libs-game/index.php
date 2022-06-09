<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./style.css">

    <title>Calcule texte à trous</title>
</head>

<body>
       <div>
    <div class="title"><h2>text a trou</h2></div>
    <div class="title-underline"></div>
    </div>

    <form action="./index.php" class="form" method="GET">
        <div class="form-row">
            <label for="name1" class="form-label">couleur</label>
            <input type="name" id="name1" name="color" class="form-input">
        </div>
        <div class="form-row">
            <label for="name2" class="form-label">un nom</label>
            <input type="name" id="name2" name="name" class="form-input">
        </div>
        <div class="form-row">
            <label for="name3" class="form-label">quelqu'un</label>
            <input type="name" id="name3" name="celeb" class="form-input">
        </div>
        <button type="submit" class="btn btn-block">cela fait</button>
    </form>
    <!-- les roses sont {rouges} 
    {les violettes} sont bleues
    j'aime {} -->
<?php print_r($_GET); ?>
    <p>
    <?php 
    $color=$_GET["color"];
    $name=$_GET["name"];
    $celeb=$_GET["celeb"];

    echo "les roses sont $color";
    echo "<br>";
    echo "$name sont bleues";
    echo "<br>";
    echo "j'aime $celeb";
    echo "<br>";
    
    ?>
    </p>
</body>

</html>