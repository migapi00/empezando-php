<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2; 

var_dump( $a == $b ); 

echo "\n";

var_dump( $a == $d); 
echo "\n";

var_dump($a != $b);
echo "\n";

var_dump($a != $b2); 
echo "\n";

var_dump($a !== $b2); 
echo "menor que", "\n";

var_dump($a < $b); 
echo "\n";

var_dump($c <$b);
echo "\n";

var_dump($d < $b); 

echo "nave espacial <=>", "\n";

echo 110 <=> 5; 
echo "\n";

echo " ?? Fusion de null",  "\n";

$edad_de_pepito = 23; 
$edad_de_jaimito = 45;

echo $edad_de_Juanito ?? $edad_de_jaimito?? $edad_de_pepito ; 







