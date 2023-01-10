<?php
//---------todo el codigo php debe ir dentro de estas etiquetas----------------------

echo "Hola Mundo"; //mostrar por pantalla un texto

//para abrir los programas escritos con php, se debe acceder desde el navegador, siguiendo la ruta en donde se encuentra el archivo

#otra forma de comentar
/*
comentario de varias lineas
*/
// el codigo fuente de php no se puede ver desde el navegador.

// ---- SE PUEDE COMBINAR HTML CON PHP ESCRIBIENDO EL HTML LUEGO DEL CIERRE-------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo php</title>
</head>
<body>
    <h1><?php echo "Hola Mundo" ?></h1>
</body>
</html>