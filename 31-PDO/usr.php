<?php
require_once("PDO.php");

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
$sql = "INSERT INTO users(name, email,password) VALUE (:name, :email, :password)";
echo ("<pre>" . $sql . "</pre>");
$stat = $pdo->prepare($sql);
$stat->execute([
    ":name"=>$_POST["name"],
    ":email"=>$_POST["email"],
    ":password"=>$_POST["password"],
]);
}

if(isset($_POST["delete"])){
    $delete = "DELETE FROM users WHERE user_id = :user_id";
$del= $pdo->prepare($delete);
$del->execute([
    "user_id"=> $_POST["user_id"]
    ])
    ;
}
$stmt= $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// !faire une PAGE UPDATE.PHP pour modifier les infos
//! $del=$pdo->prepare("DELETE FROM users WHERE id=?")->execute(["user_id"]);
//! respect de l'ordre des points d'interrogations dans les valeurs 
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
    <?php
echo "<table border='1'>";
foreach($rows as $row){
$tab = <<<TACOS
    <tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td>
        <form method="POST">
            <input type="hidden" name="user_id" value="{$row["user_id"]}">
            <input type="submit" name="delete" value="supprimer">
            </form>
        </td>
    </tr>
TACOS;
echo $tab;
}
echo "</table>";
?>
    <p>ajouter un utilisateur</p>
    <form action="" method="POST">
    <p>nom: <input type="text" name="name"></p>
    <p>email: <input type="email" name="email"></p>
    <p>password: <input type="password" name="password"></p>
    <input type="submit" value="Ajouter">
</form>
</body>
</html>