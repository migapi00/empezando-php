<?php

$michis_felinos = true; 
$michis_4_patas = true; 
$michis_vuelan = false;
$michis_programan_con_PHP = false;

var_dump($michis_felinos && $michis_4_patas);
echo "\n";


var_dump($michis_4_patas || $michis_vuelan);
echo "\n";


var_dump(!$michis_4_patas);
echo "\n";


$resultado = $michis_4_patas and $michis_programan_con_PHP; 
var_dump($resultado);
echo "\n";


$resultado = $michis_4_patas && $michis_programan_con_PHP; 
var_dump($resultado);
echo "\n";

$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false; 
$tiene_2_patas = false;


var_dump($es_un_michi_grande && $le_gusta_comer); 

var_dump($es_un_michi_grande || $sabe_volar); 

var_dump($sabe_volar || $tiene_2_patas);

var_dump(!$le_gusta_comer); 

var_dump(!$le_gusta_comer || $es_un_michi_grande); 




