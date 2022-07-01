<?php

// PHP Data Objects

// se connecter
require_once("PDO.php");

// requête PDO

$stmt= $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($rows);
// echo "</pre>";

echo "<table border='1'>";
foreach($rows as $row){
$tab = <<<TACOS
    <tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
    </tr>
TACOS;
echo $tab;
}
echo "</table>";