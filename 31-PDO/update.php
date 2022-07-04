<?php 
session_start();
require_once("PDO.php");

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if(isset($_POST["update"]) && isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){
$sql = "UPDATE users SET name=:name, email=:email, password=:password WHERE user_id=:user_id";
echo ("<pre>" . $sql . "</pre>");
$stat = $pdo->prepare($sql);
$stat->execute([
    ":name"=>$_POST["name"],
    ":email"=>$_POST["email"],
    ":password"=>$_POST["password"],
    ":user_id" =>$_SESSION["user_id"],
]);
    header('Location:usr.php');
}

if(isset($_POST["retour"])){
    header("Location: usr.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
</head>
<body>
    <p>Modifier les données</p>
    <form action="" method="POST">
    <p>nom: <input type="text" name="name" value="<?php echo $_SESSION['user']['name'] ?>"></p>
    <p>email: <input type="email" name="email" value="<?php echo $_SESSION['user']['email'] ?>" ></p>
    <p>password: <input type="password" name="password" value="<?php echo $_SESSION['user']['password'] ?>"></p>
    <input type="submit" name="update" value="Update">
    <input type="submit" name="retour" value="Retour">
</form>
</body>
</html>