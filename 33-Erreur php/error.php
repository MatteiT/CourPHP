<?php
require_once("PDO.php");

try {
  $stmt= $pdo->prepare("SELECT * FROM users WHERE user_id = :id");
  
  $stmt->execute([
    ":pizza" =>$_get["user_id"]
  ]);
} catch (Exception $e) {
echo "problème : " . $e->getMessage();
return;
exit();
}

$row =$stmt->fetch(PDO::FETCH_ASSOC);

if($row === false){
  echo "<p>user_id not found</p>";
}else{
  echo "<p>user_id found</p>";
}