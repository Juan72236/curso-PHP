<?php
$tamaño = $_COOKIE['font-size'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam culpa eveniet hic voluptatibus, voluptas repellendus quibusdam, pariatur asperiores error sapiente quisquam eum labore architecto repudiandae inventore explicabo. Temporibus eligendi ipsa eius debitis consequatur totam earum labore velit delectus dolore suscipit laudantium quo nam et provident, ut fugiat amet at molestias?</p>
</body>
</html>