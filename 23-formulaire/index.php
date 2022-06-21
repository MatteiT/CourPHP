<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les Form</title>
</head>
<body>
    <form action="" method="POST"> 
        <label for="">input :</label>
        <input type="text" name="input">
        <button type="submit">soumettre</button>
    </form>
<?php 
// var_dump($_GET);
// echo $_GET["input"];

// if(isset($_GET)["input"]) {
//     echo $_GET["input"];
// }
$info = isset($_GET["input"]) ? $_GET["input"] : '';
echo $info; 
// pour être sur que toutes les données de l'utilisateur soient présentées et au bon format
// non-vide strlen($var)>0
// un nombre is_numeric($var)
// un email strpos($var, '@')>0
// ou filter_var ($var,
FILTER_validate_email) !== false 

?>
</body>
</html>