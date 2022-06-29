<?php 

$guess="";
$message= false;
if(isset($_POST["guess"]) && !empty($_POST["guess"])){
    $guess = $_POST["guess"] + 0;
    if($guess===42){
        $message = "bravo !";
    }elseif($guess < 42){
        $message = "trop bas";
    }else{
        $message = "trop haut";
    }
}else{
    $message = "veuillez entrer kekchose";
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
<input type="text" name="guess" id="guess" value="<?= htmlentities($guess) ?>">
<input type="submit">
  </form>  
</body>
</html>
