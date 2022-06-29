<?php

session_start();


if(!isset($_SESSION["pizza"])){
    echo"<p>La session est vide </p>";
    $_SESSION["pizza"]=0;
}elseif($_SESSION["pizza"]<3){
    $_SESSION["pizza"]+=1;
    echo"<p> Ajout d'une pizza </p>";
}else{
    session_destroy();
    session_start();
    echo "<p>session redémarée</p>";
}
?>
<a href="./index.php">Cliquez-moi</a>
<a href="./session.php">session.php</a>
<pre>
    <?php print_r($_SESSION) ?>
</pre>
