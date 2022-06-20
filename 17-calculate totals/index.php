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
    echo "tu depense trop";
}else{
    echo "t'es dans le budget";
}
 return $total;
}

echo calculateTotal($gas);

echo calculateTotal($food);

echo "<pre>";
print_r($newarray);
echo "</pre>";


// si total supérieur à 100 mettre un message