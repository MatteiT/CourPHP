<?php 


if(isset($_POST["submit"]))
{
    if(!empty(($_POST["task"]))){
        $task= htmlentities($_POST["task"]);
        $sql = "INSERT INTO tasks (title, user_id) VALUE (:title, :user_id)";
        $stat = $pdo->prepare($sql);
        $stat->execute([
            ":title" => $task,
            ":user_id" => $_SESSION['user']['user_id'],
        ]);
        $_SESSION['succès'] = "Felicitations encore une chose de plus à faire !!";
    }else{
        $_SESSION['error'] = "Le Champ est vide !!";
    }
}

if(isset($_POST["delete"])) {
        $sql = "DELETE FROM tasks WHERE task_id= :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":id" => $_POST["task_id"]
        ]);
        $_SESSION['supr']= "votre Tache est supprimé ! ";

}

if(isset($_POST['SuprTable'])){
        $sql = "DELETE FROM tasks WHERE user_id=:user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":user_id" => $_SESSION['user']['user_id']
        ]);
        $_SESSION['SuprTable']= "Toutes Vos Taches sont supprimées ! ";
        header("Location: app.php");
}

if(isset($_POST['return'])){
    session_destroy();
    header("Location: home.php");
}

if(isset($_POST["cancel"])){
    header("Location: app.php");
}


if (isset($_POST["update"]) && isset($_POST["task_id"])) {
    $_SESSION["task_id"]=$_POST["task_id"];
    header("Location: ./update.php");
}



$stmt= $pdo->query("SELECT * FROM tasks WHERE user_id={$_SESSION['user']['user_id']}");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);