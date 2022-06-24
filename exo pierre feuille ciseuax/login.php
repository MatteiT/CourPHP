<?php
session_start();
$message = '';
$stored_hash = 'dddd5970b9fd8de3700b1db3cf7c8b2a';
// var_dump(hash('md5',"XyZzy12\*\_php123"));

if(isset($_POST["who"]) && isset($_POST["pass"])){
    $name = $_POST["who"];
    $pass = $_POST["pass"];
    // var_dump(hash('md5',"XyZzy12\*\_$pass") == $stored_hash);
    if(strlen($name)< 1 || strlen($pass) < 1)
    {
        $message = "le nom d'utilisateur ou mot de pass est requis";
    } 
    else if(hash('md5',"XyZzy12\*\_$pass") === $stored_hash)
    {
        $_SESSION["who"] = $name;
        header("Location:./game.php");
    }
    
else{
    $message = "ce n'est pas le bon mot de pass ! ";
    // var_dump(hash('md5',"XyZzy12\*\_$pass"));
    }
    // elseif(!is_numeric($name)&& !is_numeric($pass)){
        // $message = "le nom d'utilisateur et mot de pass ne peuvent être que des chiffres";
        // }
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
    <title>la page login</title>
</head>
<body>
  
 <section class="section">
        <form action="./login.php" method="POST" class="form">
      <h4>se connecter</h4>
      <small class='form-alert'><?php echo $message ?></small>      
      <div class="form-row">
        <label for="name" class="form-label">nom d'utilisateur</label>
        <input type="text" name="who" id="name" class="form-input" >
      </div>
      <div class="form-row">
        <label for="pass" class="form-label">mot de passe</label>
        <input type="password" name="pass" id="pass" class="form-input" >
      </div>
      <button type="submit" class="btn">se connecter</button>
      <button type="submit" name="cancel" class="btn">annuler</button>
    </form>
    <p>Pour un indice sur le mot de passe, regarder le code source et trouver l'indice dans les commentaires HTML</p>

  </section>
</body>
</html>