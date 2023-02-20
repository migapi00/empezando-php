<?php

$segundos = readline("Ingresa el tiempo en segundos: ");

$horas = (int) ($segundos / 3600);
$segundos = (int) ($segundos % 3600); 
$minutos = (int) ($segundos/60); 
$segundos = (int) ($segundos % 60); 

echo "Son $horas horas, $minutos minutos $segundos segundos." ;

echo "\n";

$horas = readline("horas: ");
$minutos = readline("minutos: ");
$segundos = readline("segundos: ");

$segundos = $horas * 3600 + $minutos * 60 + $segundos; 

echo "Son $segundos segundos en total.";

$numero = 28.56;
$numero_entero = (int) $numero; 

echo $numero_entero; 

var_dump($numero_entero);