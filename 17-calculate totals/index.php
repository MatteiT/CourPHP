<?php 

// fonctiond retour ef arrays for loop

$gas= [20,40,100,30];
$food = [10, 40, 50];


function calculateTotal($array){
    $total=0;
foreach($array as $value){
 $total += $value;
}
if($total > 100){
    echo "tu depense trop tu as depensé : $total ";
}else{
    echo "t'es dans le budget tu as depensé : $total";
}
return;
}

echo  calculateTotal($gas);
echo "<br>";
echo "<br>";
echo calculateTotal($food);
echo "<br>";




