<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./style.css">
    <title>Les formulaire</title>
</head>
<body>
    <?php
    ?>
    <div>
    <div class="title"><h2>FORM</h2></div>
    <div class="title-underline"></div>
    </div>

    <form action="GET" class="form">
        <div class="form-row">
            <label for="name" class="form-label">name</label>
            <input type="text" id="name" name="name" class="form-input">
        </div>
        <div class="form-row">
            <label for="age" class="form-label">age</label>
            <input type="number" id="age" name="age" class="form-input">
        </div>
        <button type="submit" class="btn btn-block">envoyer</button>
    </form>
</body>
</html>