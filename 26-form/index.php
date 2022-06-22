<?php

$oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <h1>Guessing game...</h1>
  <form method="POST">
    <label for="guess">Input Guess</label>
    <input type="text" name="guess" id="guess" value="<?= htmlentities($oldguess) ?>" />
    <input type="submit" />
  </form>

  <p>
    $_GET:
  </p>
  <?php
  //* GET - Les paramètres sont placés sur l'URL qui est récupérée.
  echo "<pre>";
  // print_r($_GET);
  echo "</pre>";
  ?>

  <p>
    $_POST:
  </p>
  <?php
  //* POST - L'URL est récupérée et les paramètres sont ajoutés à la requête dans la connexion HTTP.
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  ?>

  <!-- voir code source -->
  <?= $oldguess ?>

  <?php
  //* Pour être sûr que toutes les données de l'utilisateur soient présentes et au bon format :
  //* non-vide strlen($var) > 0
  //* Un nombre is_numeric($var)
  //* Un email strpos($var, '@') > 0
  //* Ou filter_var($var, FILTER_VALIDATE_EMAIL) !== false
  ?>
</body>

</html>