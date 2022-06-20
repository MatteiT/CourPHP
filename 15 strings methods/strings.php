<?php 
// propriété et méthofdes des chaines de caractères

$text = "john Doe";

echo strlen($text);
echo " <br>";
echo strtolower ($text);
echo " <br>";
echo strtoupper($text);
echo " <br>";
echo substr($text, 1, 1);
echo " <br>";
echo substr($text, -1, 1);
echo " <br>";
var_dump(strpos($text, "n"));
echo " <br>";
echo trim( $text);
echo " <br>";
echo substr($text, 0, 2);
echo " <br>";