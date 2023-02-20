<?php

$asientos_disponibles = 0; 

$es_hijo_de_Ton_Hollan = false; 

$conoce_a_Tony_Stark = true; 

if($asientos_disponibles > 0) {
    echo "Puedes ver la pelicula de Spiderman"; 
}
else if ($es_hijo_de_Ton_Hollan == true)
    echo "No te creo, pero puedes ver la pelicula";

else if ($conoce_a_Tony_Stark )
    echo "Bueno te creo, adelante";

    else {
        echo "Lo sentimos, te tocara spoilearte"; 
    }