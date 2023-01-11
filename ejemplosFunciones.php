<?php

// ------------ Desarrolle una funcion que permita calcular el area de un triangulo ------------

function calcularAreaTriangulo($base, $altura){
    $area = ($base*$altura) / 2;
    return $area;
}

echo 'El area del triangulo es: ' . calcularAreaTriangulo(300, 200);

?>