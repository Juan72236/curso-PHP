<?php

// bloque de codigo que podemos programar y ejecutar cuantas veces de requiera con ayuda de una sola linea de codigo -----

/* function saludo(){
    echo 'Hola. Como esta usted?';
}

saludo(); */

// --------- FUNCIONES CON PARAMETROS ----------

/* function saludo($nombre){
    echo "Hola, $nombre, como esta usted?";
}

saludo('Juan'); */

// ---------- FUNCION PARA SUMAR VALORES ---------

/* function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    echo "el resultado es: $resultado";
}

sumar(2800,1000); */

// ------- RETORNANDO VALORES DE LAS FUNCIONES ----------

function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;

    /*lo que se escriba aca
    despues del return, no
    se ejecutará */
}

$res = sumar(2800,1000);
echo "el resultado es: $res";
