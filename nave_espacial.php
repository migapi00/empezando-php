<?php

$precios_de_cafe = [36, 58,96,2,7,14]; 

usort($precios_de_cafe, function($a, $b){
    return $a <=> $b; 
});

var_dump($precios_de_cafe); 

echo "\n"; 

$palabras = ["Hola", "Abecedario", "Perro", "Gato"];
usort($palabras, function($a, $b){
    return $a <=> $b;

});
echo "\n"; 

foreach ($palabras as $clave => $valor) {
    echo "Clave[" . $clave . "] = " . $valor . "\n";
}