<?php

$tienda_de_cafes = array(
    "Americano" => 10,
    "Latte" => 12, 
    "Capuccino" => 15, 
    "Mocca" => 14
); 

foreach ($tienda_de_cafes as $price) {
    echo "El cafe en cuestion cuesta $ $price USD \n"; 
}

echo "\n";

foreach ($tienda_de_cafes as $cafe => $price) {
    echo "El cafe $cafe cuesta $ $price USD \n"; 
}