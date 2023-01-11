<?php

// --- Tambien nos permite conocer los tipos de datos de las variables, al igual que var_dump. Pero en este caso lo hace mas legible para los humanos. ---------

$texto = 'Juan';
$numero = 10;
$numero2 = '5';
$arreglo = array('Juan', 'Geraldine', 'Pablo');
$arregloAsociativo = array('nombre' => 'Juan', 'edad' => 22);
$booleano = true;

print_r($booleano); // muestra directamente el valor que tiene almacenado la variable.

?>