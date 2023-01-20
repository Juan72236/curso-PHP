<?php

$conexion = new mysqli('localhost', 'JpSoft', 'Juan1500.', 'prueba_consola');

if($conexion->connect_errno){
    die('Ups ! Hubo un problema con el servidor');
}else{
    $sql = 'SELECT * FROM usuarios';
    $resultado = $conexion->query($sql);

    if($resultado->num_rows){
        $resultado->fetch_assoc();
    }else{
        echo 'No hay datos';
    }
}