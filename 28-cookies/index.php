<?php

if(!isset($_COOKIE["zap"])){
  setcookie("zap", "42", time()+3600);
}
?>
<pre>
  <?php print_r($_COOKIE)?>
</pre>
<p>
  <a href="./index.php">Clique moi ou actialise la page</a>
</p>
