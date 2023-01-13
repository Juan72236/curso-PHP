<?php

$errores = '';

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if(!empty($nombre)){
        /* $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre = stripslashes($nombre); */

        /* $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); limpia los datos ingresados en un campo de texto, removiendo cualquuier etiqueta o caracter que pueda alterar el código o la base de datos. */

        echo 'Su nombre es: ' . $nombre . '<br />';
    }else{
        $errores .= 'Por favor agrega un nombre' . '<br />';
    }

    if(!empty($correo)){
        filter_var($correo, FILTER_SANITIZE_EMAIL); //Elimina caracteres basura del correo, protegiendo el codigo. 
        
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores = 'Por favor ingresa un correo valido <br />';
        }else{
            echo 'Tu correo es: ' . $correo;
        }
        
        echo 'Su correo es: ' . $correo . '<br />'; 
    }else{
        $errores .= 'Por favor agrega un correo';
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="email" name="correo" id="correo" placeholder="correo">

        <?php if(!empty($errores)) : ?>
            <div class="error"><?php echo $errores ?></div>
        <?php endif; ?>
        
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>