<?php  
session_start();
require_once("PDO.php");

var_dump($_POST);

if(isset($_POST["submit"])){
$sql = "SELECT * FROM users WHERE name=:name AND password=:password";
$stat = $pdo->prepare($sql);
$stat->execute([
    ":name" => $_POST['name'],
    ":password"=> $_POST['password'],
]);
$user= $stat->fetch(PDO::FETCH_ASSOC);
$_SESSION["user"]=$user;
header('Location: app.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>LOGIN</title>
</head>
<body>
<section class="vh-100 bg-image">
<div class="mask d-flex align-items-center h-100 gradient-custom-3" >
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Creer un compte</h2>


            <form method="POST">

                <div class="form-outline mb-4">

                <input  type="text" id="form3Example1cg" class="form-control form-control-lg" name="name"/>
                <label class="form-label" for="form3Example1cg">Votre nom</label>
                </div>

                <div class="form-outline mb-4">

                <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password"  />
                <label class="form-label" for="form3Example4cg">Votre mot de pass</label>

                </div>

                <button type="submit" name="submit">Se connecter>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
</body>
</html>