<?php 
session_start();
if(isset($_POST["account"])&& isset($_POST["pw"])) {
  unset($_SESSION["account"]);
  if($_POST["pw"] === "afci"){
    $_SESSION["account"] = $_POST["account"];
    $_SESSION["success"] = "connecté";
    header("Location: ./app.php");
    exit();
  }else{
    $_SESSION["error"]= " mot de pass incorect";

  }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=form, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>se connecter</h1>
  <?php 
  if(isset($_SESSION["error"])){
    echo "<p>". $_SESSION["error"] . "</p>";
    unset($_SESSION["error"]);
  }
  ?>
  <form method="post">
    <p>nom d'utilisateur : <input type="text" name="account"
    ></p>
    <p>
      mot de pass <input type="password" name='account'>
    </p>
    <button type="submit">se connecter</button>
    <a href="./index.php">annuler</a>
  </form>
</body>
</html>
