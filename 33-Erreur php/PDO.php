<?php

$host= "localhost";
$user="root";
$password = "";
$dbname = "people";

//  definir le DSN 
$dsn = "mysql:host=$host;dbname=$dbname";

// creer une instance de PDO
try {
    $pdo= new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
echo "exception message:" . $e->getMessage();
}
