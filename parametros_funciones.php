<?php

function es_estudiante_legend($platzi_rank) {
    if ($platzi_rank >= 20000){
        echo "Eres un estudiante legend \n";
    } else {
        echo "Lo sentimos, sigue estudiando \n"; 
    }
}


do{
$platzi_rank_user = (int) readline ("Por favor, escribe tu platzi rank: ");

es_estudiante_legend ($platzi_rank_user);

} while (true); 


