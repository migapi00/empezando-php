<?php

$edades = [18, 22, 40, 36]; 

echo count($edades); 

echo "\n"; 

array_push($edades, 15); 

var_dump($edades); 

$esto_no_es_un_arreglo = ""; 

echo "\n"; 

var_dump(is_array( $esto_no_es_un_arreglo )); 

echo "\n"; 

var_dump(is_array( $edades)); 

echo "\n"; 

$lista_de_frutas = "fresa, manzana, platano"; 

$lista_de_frutas_array = explode("," , $lista_de_frutas);

var_dump($lista_de_frutas_array); 

echo "\n"; 

$lista_de_frutas_array_2 = ["fresa", "manzana", "platano"]; 

$lista_de_frutas_2 = implode(", " , $lista_de_frutas_array_2);

var_dump($lista_de_frutas_2); 


