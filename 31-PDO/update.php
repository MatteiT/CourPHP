<?php 
session_start();
require_once("PDO.php");

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
$name =$_SESSION['user']['name'];
$_SESSION['user']['password'];

if(isset($_POST["update"])){
$sql = "UPDATE users(name, email,password) SET (:name, :email, :password) WHERE id= 'id'";
echo ("<pre>" . $sql . "</pre>");
$stat = $pdo->prepare($sql);
$stat->execute([
    ":name"=>$_SESSION["name"],
    ":email"=>$_SESSION["email"],
    ":password"=>$_SESSION["password"],
    ":id" => $_SESSION["id"],
]);
header("Location: usr.php");
}

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
// echo "<table border='1'>";
// foreach($rows as $row){
// $tab = <<<TACOS
//     <tr>
//         <td>{$_SESSION['name']}</td>
//         <td>{$_SESSION["email"]}</td>
//         <td>{$_SESSION["password"]}</td>
//         <td>
//         <form method="POST">
//             <input type="hidden" name="user_id" value="{$row["user_id"]}">
//             <input type="submit" name="delete" value="supprimer">
//             </form>
//         </td>
//         <td>
//             <input type="submit" name="update" value="update">
//         </td>
//     </tr>
// TACOS;
// echo $tab;
// }
// echo "</table>";
?>
    <p>Modifier les données</p>
    <form action="" method="POST">
    <p>nom: <input type="text" name="name" placeholder="<?php echo $name  ?>"></p>
    <p>email: <input type="email" name="email" placeholder="<?php echo $_SESSION['user']['email'] ?>" ></p>
    <p>password: <input type="password" name="password" placeholder="<?php echo $_SESSION['user']['password'] ?>"></p>
    <input type="submit" value="Mettre à Jour">
</form>
</body>
</html>