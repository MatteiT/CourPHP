<?php 
session_start();
require_once("PDO.php");
require("QuerySQL.php");

var_dump($_SESSION);

if (isset($_POST["confirm"])) {
    $sql = "DELETE FROM tasks WHERE task_id=:task_id";
    echo "<pre>\n$sql\n</pre>";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":task_id" => $_SESSION["task_id"]
    ]);
    $_SESSION['supr']= "votre Tache est supprimé ! ";
    header("Location: app.php");
    return;
}


?>

<form method="POST">
    <button type="submit" class="btn btn-primary" name="confirm">confirmer</button>
    <button type="submit" class="btn btn-primary" name="cancel" >Annuler</button>