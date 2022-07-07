<?php 
session_start();
require_once("pdo.php");

var_dump($_SESSION);


if(isset($_POST["update"])){
    if(!empty(trim($_POST["task"])))
    {
      $sql = "UPDATE tasks SET title=:title WHERE task_id=:task_id";
        echo ("<pre>" . $sql . "</pre>");
      $stat = $pdo->prepare($sql);
      $stat->execute([
          ":title"=>$_POST["task"],
          ":task_id"=>$_SESSION["task_id"],
          ]);  
          
      $_SESSION['modd'] = "La Tache est modifiée";
      unset($_SESSION['task_id']);
      header("Location: app.php");
      return;
    }else{
      $_SESSION['error'] = "Tous les champs sont requis";
      header("Location: update.php?todos_id=".$_REQUEST['id']);
      return;
    }
}

$stmt = $pdo->prepare("SELECT * FROM tasks WHERE task_id = :task_id");
$stmt->execute([
  ":task_id" => $_SESSION["task_id"]
  ]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
    <p>Modifier une Tache</p>
<?php  
  if(isset($_SESSION['error'])){
    echo('<div id="alert" class="alert alert-danger" role="alert">');
    echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
    echo('</div>');
    unset($_SESSION['error']);
    }
?>

<form method="post">
  <p>la Tache:<input type="text" name="task" value="<?= $row["title"] ?>"></p>
  <p><input type="submit" name="update" value="modifier" /></p>
</form>
</body>
</html>
