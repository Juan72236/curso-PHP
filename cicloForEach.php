<?php

//arreglo normal
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
//arreglo asociativo
$karen = array('telefono' => 3145269874,
    'edad' => 20, 'pais' => 'colombia'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo ForEach</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php
        //recorriendo el arreglo normal
            /* foreach($meses as $mes){
                echo '<li>' . $mes . '</li>'; 
            } */
        //recorriendo el arreglo asociativo
        foreach($karen as $amiga => $valor){
            echo '<li>' . $valor . '</li>';
        }
        ?>
    </ul>
</body>
</html>