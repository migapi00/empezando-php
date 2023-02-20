<?php

echo "\n";

$numero_de_tienda = readline("Ingresa el numero de tienda:");
$anterior = 0;
$actual = 1;

for ($i=2; $i <= $numero_de_tienda ; $i++) { 
    
    $temporal = $actual;
    $actual = $actual + $anterior;
    $anterior = $temporal;
    
}

echo "Hay $actual formas de llegar a la tienda Nº $numero_de_tienda " . "\n";


$numero_de_tienda = readline("A que tienda quieres llegar: ");

$n1 = 0;
$n2 = 1;
$i = 2;

while ($i <= $numero_de_tienda){
   
    $nt = $n2;
    $n2 = $n1 + $n2;
    $n1 = $nt;
    $i++;
    //echo "$n2, ";
};
echo "\n";
echo "La cantidad de caminos hasta la tienda $numero_de_tienda son $n2";
echo "\n";
