<?php
session_start();
// $guess= isset($_SESSION["guess"]) ? $_SESSION["guess"] : "";
// $message= isset($_SESSION["message"]) ? $_SESSION["message"] : "";
$guess = $_POST["guess"] ?? "";
$message = $_SESSION["message"] ?? "";

if($guess){
    $_SESSION["guess"] = $guess;
    if($guess ==42){
        $_SESSION["message"] = "bravo ! ";
    }elseif($guess <42){
        $_SESSION["message"] = "trop bas ! ";
    }else {
        $_SESSION["message"] = "trop haut ! ";
    }
    header("location: ./improved.php");
    return;
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
<p>le juste prix</p>

<?php 
if($message){
echo "<p>$message</p>";
}
?>

<form method="POST">
<p><label for="guess">Estimation</label></p>
<input type="text" name="guess" id="guess" value="<?= htmlentities($_SESSION["guess"]) ?>">
<input type="submit">
</form>  
</body>
</html>
