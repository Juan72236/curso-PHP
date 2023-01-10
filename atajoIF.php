<?php
$edad = 18; 
$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad' ;
echo 'Edad: ' . $edad;

// ------ sintaxis del condicional if con atajo ------------
// variable = (condicion) ? lo que se ejecuta si la condicion se cumple : lo que se ejecuta si la condicion no se cumple

// ------ FUNCION isset -----------
/* la funcion isset recibe como parámetro una variable y retorna true o false.
 + true: si la variable ha sido inicializada con algun valor
 + false: si no tiene ningun valor
*/
?>