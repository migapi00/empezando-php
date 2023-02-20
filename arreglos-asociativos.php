<?php

$edades = array(
    "Carlos" => 20, 
    "Mr.Michi" => 18, 
    "Juan" => 40,
);

echo "La edad de Mr.Michi es " . $edades["Mr.Michi"];

echo "\n";

$cafe = array(
    "Capuccino" => 2,
    "Late" => 3,
    "Americano" => 4,
);

echo "El precio del cafe Americano es de {$cafe["Americano"]}";

echo "\n";

$personas = array(
    "Linda" => array(
        "edad" => 38, 
        "apellidos" => "Chang Tirado", 
    ),

    "Hannah" => array(
        "edad" => 21, 
        "apellidos" => "Garcia Chang", 
    ),
); 

echo "La informacion de Hannah  es: Edad: " . $personas ["Hannah"] ["edad"] ." ; Apellidos: " . $personas  ["Hannah"] ["apellidos"]; 

echo "\n";

