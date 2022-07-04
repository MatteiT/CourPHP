<?php 
session_start();
require_once("PDO.php");
if (isset($_POST["register"]) && isset($_POST['name']) && isset($_POST['password']) && isset($_POST['password2'])){

$sql = "INSERT INTO users (name, password) VALUE (:name, :password)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
":name" => $_POST["name"],
":password" => $_POST["password"],
]);
$message = "Bravo vous êtes enregistré !!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>S'enregister</title>
</head>
<body>
    <form method="POST">
<!-- NAME input -->
<div class="form-outline mb-4">
    <input type="text" id="form2Example1" name="name" class="form-control" />
    <label class="form-label" for="form2Example1">Votre nom</label>
</div>
<!-- Password input -->
<div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password" />
    <label class="form-label" for="form2Example2">Password</label>
</div>
<div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password2" />
    <label class="form-label" for="form2Example2">Password de nouveau</label>
</div>
<!-- Submit button -->
<button type="submit" class="btn btn-primary btn-block mb-4" name="register">S'enregister</button>
</div>
</form>
<div class="alert alert-success" role="alert"><?php echo $message?></div>
</body>
</html>