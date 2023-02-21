<?php

function suma($a, $b) {
    echo "La suma de $a + $b es " . ($a + $b) . "\n"; 
}

suma(5, 3); 

echo "\n";

function suma2($a=1, $b=1) {
    echo "La suma de $a + $b es " . ($a + $b) . "\n"; 
}

suma2(5); 


$arreglo1 = [1, 2, 3]; 
$arreglo2 = [4, 5, 6]; 

$resultado = [...$arreglo1, ...$arreglo2]; 

var_dump ($resultado); 




function suma3($a, $b) {
    echo "La suma de $a + $b es " . ($a + $b) . "\n"; 
}
$numeros = [5,6];
$numeros2 = [45,66];
$numeros3 = [59,106];
suma3(...$numeros); 
suma3(...$numeros2); 
suma3(...$numeros3); 


function suma_infinita(...$params) {
    $suma4 = 0;
    foreach ($params as $numero) {
        $suma4 += $numero; 
    }
    echo "la sumatoria es: $suma4 \n";
}

suma_infinita(1,2,3,4,5,6); 
suma_infinita(3,4,5,6,1000); 
suma_infinita(5,6,100); 


