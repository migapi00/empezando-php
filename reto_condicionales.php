<?php

$dinero_total_streamer = readline("Por favor, ingresa la cantidad de donaciones acumaladas que tienes: ");

if($dinero_total_streamer >= 100) {
    echo "Puedes retirar todo"; 
}
else {
        echo "Lo sentimos, debes completar la suma de 100 para retirar" . ", tu saldo actual es " . $dinero_total_streamer ; 
    }
