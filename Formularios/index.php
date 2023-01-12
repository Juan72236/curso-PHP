<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura php de un Formulario</title>
</head>
<body>
    <form action="recibe.php" method="get" name="">
        <input type="text" placeholder="Nombre:" name="nombre">
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre">

        <label for="Mujer">Mujer</label>
        <input type="radio" name="sexo" value="Mujer">

        <select name="year" id="">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>

        <label for="terminos">Terminos y Condiciones</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">

        <input type="submit" value="enviar">
    </form>
</body>
</html>