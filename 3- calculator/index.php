<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./style.css">
    <title>la Calculatrice</title>
</head>
<body>
    <?php
    ?>
    <div>
    <div class="title"><h2>calc</h2></div>
    <div class="title-underline"></div>
    </div>

    <form action="./index.php" class="form" method="GET">
        <div class="form-row">
            <label for="num1" class="form-label">nombre</label>
            <input type="number" id="num1" name="num1" class="form-input">
        </div>
        <div class="form-row">
            <label for="num2" class="form-label">nombre2</label>
            <input type="number" id="num2" name="num2" class="form-input">
        </div>
        <button type="submit" class="btn btn-block">additionner</button>
    </form>
    <p>
        <?php print_r($_GET); ?>
        Cela fait <?= $_GET["num1"] + $_GET["num2"]; ?>
    </p>

</body>
</html>