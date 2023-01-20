<?php

try{
    //codigo
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'JpSoft', 'Juan1500.');
    echo "Conexion Establecida" . "<br /><br />";

    /* METODO QUERY ---> no es recomendable debido a que le permite al usuario incyectar codigo
    $resultados = $conexion->query('INSERT INTO usuarios VALUES(null, "Nicole", "nicole@correo.com");');
    $resultados = $conexion->query('SELECT * FROM usuarios');

    foreach($resultados as $fila){
        echo $fila['id'] . ' ---> ' . $fila['nombre'] . '<br />';
    } */

    //Metodo prepared statements
    $statement = $conexion->prepare('SELECT * FROM usuarios');
    $statement->execute();

}catch(PDOException $e){
    //Mostrar error
    echo "Error: " . $e->getMessage();

}

