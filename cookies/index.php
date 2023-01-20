<?php 

//las cookies son pequeños archivos que crea el servidor en las computadoras de los usuarios para guardar cierta informacion que se quiera usar. 

setcookie('font-size', '40px', time() + 60 * 60 * 24 *30, '/'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookie Seteada</h1>
</body>
</html>