<?php

$nombre = "Carlos";
var_dump($nombre);

$apellido = "Gómez";
var_dump($apellido);


$edad = 18;
var_dump($edad);


$aprobado = true;
var_dump($aprobado);

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
var_dump($promedio);

$nombre_completo = $nombre . " " . $apellido;
var_dump($nombre_completo);

$presento_examen = (bool) 1;
var_dump($presento_examen);

//Avanzado

$numero_preguntas = 5 + "5";
var_dump($numero_preguntas);

$numero_respuestas = "5" + 5;
var_dump($numero_respuestas);

$promedio_maximo = $numero_respuestas / 1.0;
var_dump($promedio_maximo);

$michis = 3 + "5 michis";
var_dump($michis);
