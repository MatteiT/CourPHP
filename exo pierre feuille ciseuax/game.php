<?php 
session_start();

if(!isset ($_SESSION["who"])){
    die("Le paramètre name est manquant.");
} 

$joueur = $_POST["human"] ?? "";
$rngcpu = rand(0,2);

function check($rngcpu, $joueur){
  if ($rngcpu == $joueur) {
    return "Egalité";
  }else if ($rngcpu == 0 && $joueur == 1) {
    return  "Gagné";
  }else if ($rngcpu == 1 && $joueur == 2) {
    return "Gagné";
  }else if ($rngcpu == 2 && $joueur == 0) {
    return  "Gagné";
  }else if  ($rngcpu == 2 && $joueur == 1) {
    return  "Perdu";
  } else if  ($rngcpu == 1 && $joueur == 0) {
    return "Perdu";
  }else if  ($rngcpu == 0 && $joueur == 2) {
    return  "Perdu";
  }
}

if ( isset($_POST['logout']) ) {
  header('Location: index.php');
  return;
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
      <button name="submit" type="submit" class="btn">jouer</button>
      <button type="submit" name="logout" class="btn">se déconnecter</button>
    </form>
   <pre>
<?php
if(isset($_POST["submit"])){
  $result = check($rngcpu, $joueur);
  $tab = ["Pierre", "Papier", "Ciseaux"];
  echo "Vous avez fait $tab[$joueur] l'ordi a fait $tab[$rngcpu] c'est $result";
}else{
  echo "Sélectionner une stratégie et appuyer sur Jouer <br>";
}
if($joueur == 3) {
  for($rngcpu=0;$rngcpu<3;$rngcpu++) {
      for($joueur=0;$joueur<3;$joueur++) {
          $result = check($rngcpu, $joueur);
          echo "<pre>";
          print_r( "Human=$tab[$joueur] Computer=$tab[$rngcpu] Result=$result \n");
          echo "</pre>";
          }
        }
}
?>
</pre>
  </section>
  </section>
</body>
</html>