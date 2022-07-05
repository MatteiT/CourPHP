<?php 
session_start();

require_once("PDO.php");
require("QuerySQL.php");
if(!isset($_SESSION['user'])){

    die("accès refusé");
}else{
    var_dump($_SESSION);
}

if(isset($rows)){
var_dump($rows);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <title>ToDo list</title>
</head>
<body>
    <h1>Bienvenue <?php echo $_SESSION['user']['name'] ?></h1>
    <section class="vh-100">

<?php  
if(isset($_SESSION['error']))
{
  echo('<p style="color: red;">'.htmlentities($_SESSION['error'])."</p>\n");
  unset($_SESSION['error']);
}
?>

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">

          <div class="card-body py-4 px-4 px-md-5">

            <h2 class="h1 text-center mt-3 mb-4 pb-3 text-primary">Mes Taches</h2>

            <div class="pb-2">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row align-items-center">
                    <form method="POST">
                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"
                        placeholder="Nouvelle Tâche..." name="task" >

                        <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
                    </div>
                    </form>
                    <div><?php  ?></div>
                  </div>
                </div>
              </div>
            </div>
<?php

echo "<table border='1'>";
foreach($rows as $row){
$tab = <<<TACOS
    <tr>
        <td>{$row['task_id']}</td>
        <td>{$row['title']}</td>
        <td>
        <form method="POST">
        <td>
            <input type="hidden" name="task_id" value="{$row["task_id"]}"></td>
            <td>
            <input type="submit" name="delete" value="supprimer"></input>
            </td>
            <td>
            <input type="submit" name="update" value="modifier"></input>
            </td>
            </form>
        </td>
        </tr>

TACOS;
echo $tab;
}
echo "</table>";
?>

</section>
</body>
</html>