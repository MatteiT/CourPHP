<?php
require_once("PDO.php");

if(isset($_POST["email"]) && isset($_POST["password"])){
  echo "on gère les données en POST...\n";
  $e=$_POST["email"];
  $p=$_POST["password"];
  $sql="SELECT name FROM users WHERE email = '$e' AND password = '$p'";
  echo "<pre>$sql</pre>";

  $stmt=$pdo->query($sql);
  $row=$stmt->fetch(PDO::FETCH_ASSOC);

  if($row){
    echo "<h1>Connecté avec succès</h1>";
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <p>email: <input type="email" name="email"></p>
    <p>password: <input type="text" name="password"></p>
    <input type="submit" value="Se connecter">
    <a href="./login.php">rafraichir</a>
</body>
</html>