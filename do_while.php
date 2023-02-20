<?php

do {
    echo "Esto se va ejecutar al menos una vez"; 
} while(false); 

echo "\n";

$usernames = ["Luis", "Linda", "Hannah"]; 

do {
    $username = readline("Para poder acceder, por favor, ingresa tu nuevo nombre de usuario: " );
} while (in_array ($username, $usernames)); 

echo "\n";