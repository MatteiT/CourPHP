<?php 

session_start();

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
    <h1>mon app cool</h1>
    <?php
if(isset($_SESSION["error"])){
    echo "<p>". $_SESSION["error"] . "</p>";
    unset($_SESSION["error"]);
  }

  if(!isset($_SESSION["account"])){
    echo "<a href='./index.php'>se connecter</a>";
  }else{
    echo "<p>c'est ici pour mon application</p>";
    echo "<a href='./logout.php'></a>";
  }
  ?>
</body>
</html>