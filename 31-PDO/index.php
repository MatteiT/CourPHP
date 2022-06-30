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
echo "<tr><td>";
echo $row["name"];
echo "</td><td>";
echo $row["email"];
echo "</tr></td>";
}
echo "</table>";