<?php

$tienda_de_cafes = array(
    "Americano" => 10,
    "Latte" => 12,
    "Recalentado" => 5, 
    "Capuccino" => 15, 
    "Mocca" => 14
); 

foreach ($tienda_de_cafes as $cafe => $price) {
    
    echo "Actualmente encontre al cafe $cafe \n "; 

    if ($cafe == "Latte") {
        echo "Encontramos a latte!!!"; 
        break; 
    } 
}
echo "\n";
echo "\n";

foreach ($tienda_de_cafes as $cafe => $price) {
    
    if ($cafe == "Recalentado") {
        continue; 
    } 
    echo "El cafe $cafe es muy rico!!! \n"; 
}