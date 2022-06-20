<?php 
$tax = 1.20;
function calculateTOtal ($subtotal, $tax){
    $newvalue = $subtotal * $tax;
    echo "la valeur après tax est de : $newvalue euros";
    return $newvalue;
}

$order1 = 14.75;
echo "<br>";
calculateTOtal($order1, $tax);

$order2 = 24.56;
echo "<br>";
calculateTOtal($order2, $tax);
$order3 = 32.10;
echo "<br>";
calculateTOtal($order3, $tax);

