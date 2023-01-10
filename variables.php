<?php

// --------------------- la declaracion y asignacion de variables en php se hace siguiendo la siguiente sintaxis -------------------------
$nombre = "Juan";
$numero = 7;
// --------------------- las variables son sensibles a mayusculas y minusculas
// --------------------- no puede llevar caracteres especiales como tildes, puntos o ñ

/**--------------------- TIPOS DE DATOS QUE SE PUEDEN ALMACENAR EN UNA VARIABLE
 * Cadenas de texto (deben ir entre comillas, dobles o sencillas)
 * Numeros enteros (integer)
 * Numeros decimales (double)
 * Verdadero o falso (boolean)
 * --------------------- no es necesario especificar el tipo de variable que se va a almacenar al declararla
 * Array (arreglos o vectores)
 * Objetos (object)
 * Clase (class)
 * Null: Cuando a una variable aun no se le ha asignado ningun valor
 * 
 * DIFERENCIA ENTRE COMILLAS DOBLES O SENCILLAS: Las comillas dobles me permiten ejecutar dentro variables, y por ende concatenar texto con variables. Para concatenar con sencillas, se hace con un punto .
 */

//echo "hola $nombre";
//echo 'hola, ' . $nombre;

// ---------------------- para conocer el tipo de dato de una variable se utiliza la siguiente funcion

echo gettype($nombre);
?>