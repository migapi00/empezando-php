<?php

$michis = array(
    
    array(
        "Nombre" => "Hilary",
        "Ocupacion" => "Decoradora", 
        "Color" => "Rosado", 
        "Comida" => array(
            "favorita" => "tallarines", 
            "No_le_gusta" => "mote",
        ),
    ),

    array(
        "Nombre" => "Miley",
        "Ocupacion" => "Dibujante", 
        "Color" => "Morado", 
        "Comida" => array(
            "favorita" => "pasta", 
            "No_le_gusta" => "cebolla",
            ),
    ),
    
    array(
        "Mombre" => "Hannah",
        "Ocupacion" => "Informatica", 
        "Color" => "Azul", 
        "Comida" => array(
            "favorita" => "suschi", 
            "No_le_gusta" => "conejo",
            ),
    ),    
);

$Hilary = $michis[0]; 
$Miley = $michis[1]; 
$Hannah = $michis[2]; 

echo "La comida favorita de Miley es " . $Miley ["Comida"] ["favorita"]; 

echo "\n"; 

echo "El color favorito de Hannah es " . $Hannah ["Color"] . " y su ocupacion es " . $Hannah ["Ocupacion"]; 



