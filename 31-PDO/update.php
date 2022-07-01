<?php 
session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

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
        <td>
            <input type="submit" name="update" value="update">
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