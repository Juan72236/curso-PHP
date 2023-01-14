<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <title>Formulario Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" placeholder="Nombre:">

            <input type="text" name="correo" id="correo" class="form-control" value="<?php if(!$enviado && isset($correo)) echo $correo ?>" placeholder="Correo:">

            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje:"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

            <?php if(!empty($errores)) : ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado Correctamente !</p>
                </div>
            <?php endif ?>

            <input type="submit" value="Enviar Correo" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>