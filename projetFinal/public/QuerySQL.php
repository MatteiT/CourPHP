<?php 

if(isset($_POST["submit"]))
{
    if(strlen($_POST["task"])>0){
    $sql = "INSERT INTO tasks (title, user_id) VALUE (:title, :user_id)";
    echo ("<pre>" . $sql . "</pre>");
    $stat = $pdo->prepare($sql);
    $stat->execute([
        ":title" => $_POST['task'],
        ":user_id" => $_SESSION['user']['user_id'],
    ]);
    }else{
        $_SESSION['error'] = "Tous les champs sont requis";
        return;
    }
}

if (isset($_POST["confirm"])) {
    $sql = "DELETE FROM tasks WHERE task_id= :id";
    echo "<pre>\n$sql\n</pre>";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":id" => $_SESSION["task_id"]
    ]);
    $_SESSION['supr']= "votre Tache est supprimé ! ";
    header("Location: app.php");
    return;
}

if(isset($_POST["cancel"])){
    header("Location: app.php");
}

if (isset($_POST["update"]) && isset($_POST["task_id"])) {
    $_SESSION["task_id"]=$_POST["task_id"];
    header("Location: ./update.php");
}

$stmt= $pdo->query("SELECT * FROM tasks");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);