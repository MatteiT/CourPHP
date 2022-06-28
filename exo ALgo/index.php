<?php 

$a = 7;
$b= 61;
$a=$b;


// La moyenne

$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_francais +$note_histoire_geo + $note_maths) / 3;
echo "<br>";
echo 'La moyenne est de '.$moyenne.' / 20.';
echo "<br>";

//  prix ttc

$prix_ht = 50;
$tva = 20;
$prix_ttc = $prix_ht * ($tva / 100);
echo "<br>";
echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
echo "<br>";
// 4.

$sexe = "male" ;
if($sexe === "male"){
    echo "je suis un homme";
}elseif($sexe !== "male")
{"je suis une femme";
}else{
    echo " je suis autre";
}
echo "<br>";
// 5.

$age = 31;
if ($age < 18){
    echo "je suis mineur";
}else {
    echo "je suis majeur";
}
echo "<br>";

// 6.
function check($numbers){
    if($numbers>0){
        return true;
    }else {
        return false;
    }
    
}
$number = -20;
var_dump( check($number));
echo "<br>";

// 7.
// function suite(){
//     for($i=0; $i<=10; $i++){
//     echo "$i\n";}
// }
// print_r(suite());
// echo "<br>";


// 8.
$i = 0;
while($i <= 20) {
    if($i == 10) {
    echo '<strong>'.$i.'</strong>';
    } else {
    echo $i;
    }
echo '<br />';
$i = $i + 2;
}

// 9.
echo "<br>";
$num = 8;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial \n"; 
echo "<br>";

// 10
// $i=77000;
// while($i <= 77999){
//     echo"<br>";
//     echo $i++;
// }

// 11.
echo "<br>";
$x=7;

function table($x){
    for ($y = 1; $y <=10; $y++) {
        $z = $x * $y;
        echo $x ."*". $y ."=". $z . "<br>";
    }
}

echo "<pre>";
echo table($x);
echo "</pre>";
echo "<br>";

// 12
function pyr(){
for ($i=1; $i <10; $i++) { 
    for ($x=1; $x <= $i; $x++) { 
        echo $i;
    }
echo "<br>";
    }
}
echo pyr();

// 13.
echo "<br>";
echo "<br>";
$a = 0;

for ($a=0; $a<=20 ; $a+=2) {
    if($a == 10){
        echo "<h1> $a </h1>";
    }else{echo $a; }
}
echo "<br>";

// 14

$name = ["bob", "tom", "susy"];

function name($name){
    return $name[2];
}
echo "<br>";
echo name($name);
echo "<br>";

// 15.

$array = [
    1, 2 , 3, 4, 5 , 6
];
$number3= 7;
function numberpush($array, $number2){
    array_push($array, $number2);
    return $array;
}
echo "<br>";
var_dump(numberpush($array, $number3));

// 16.
function numbersupr($array){
    array_slice($array, $array[5] );
    return($array);
}
echo "<br>";
var_dump(numbersupr($array));

// 17.

function numbersum($array){
    return (array_sum($array));
}
echo "<br>";
var_dump(numbersum($array));

// 18.

$capitals = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Italie" => "Rome",
];

echo "<br>";
echo "<br>";
foreach($capitals as $value ){
    echo "$value";
    echo "<br>";
}

// 19.

function rando(){
    $rand = [];
    for ($i=0; $i<=10 ; $i++) {
        array_push($rand, rand(0,100));
    }
    if(array_key_exists(42, $rand)){
        echo "le numero 42 existe";
    }else{
        echo "le chiffre n'existe pas dans le tableau";
    }
    
    return $rand;
}

echo "<pre>";
var_dump(rando());
echo "</pre>";

// 20.

$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);
function UpPop($var){
    return $var > 20000000;
}

echo "<pre>";
print_r(array_filter($pays_population, "UpPop"));
echo "</pre>";

// 21.
$pays_population2 = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);

print_r(count($pays_population2));