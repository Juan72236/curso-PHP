<?php
// Ordenando arreglos de forma ascendente y descendente
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

//sort($numeros);
rsort($numeros);

//sort($meses); // funcion que me permite ordenar los arreglos de forma alfabetica.
//rsort($meses); // funcion que invierte el orden alfabetico
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
    <h1>Meses del Año</h1>
    <ul>
        <?php
        foreach($numeros as $numero){
            echo '<li>' . $numero . '</li>';
        }
        ?>
    </ul>
</body>
</html>