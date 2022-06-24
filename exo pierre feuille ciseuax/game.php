<?php 
session_start();
if(!isset ($_SESSION["who"])){
    die("Le paramètre name est manquant.");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./styles.css">
    <title>la game</title>
</head>
<body>
  <section class="section">
    <div class="title">
      <h2>pierre papier ciseaux</h2>
      <div class="title-underline"></div>
    </div>
    <form method="POST" class="form">
      <p class="welcome">Bienvenue : <?= $_SESSION["who"] ?> </p>
      <div class="form-row">
        <select name="human" class="form-input">
          <option value="-1">Sélectionner</option>
          <option value="0">Pierre</option>
          <option value="1">Papier</option>
          <option value="2">Ciseaux</option>
          <option value="3">Test</option>
        </select>
      </div>
      <button type="submit" class="btn">jouer</button>
      <button type="submit" name="logout" class="btn">se déconnecter</button>
    </form>
    <pre>
    Sélectionner une stratégie et appuyer sur Jouer  </pre>
  </section>
  </section>
</body>
</html>