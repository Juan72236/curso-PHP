<?php

/*if(condicion){
    //instrucciones
}*/
$edad = 18;
$nombre = 'Juan';
if($edad >= 18 && $nombre == 'Juan' ){
    echo '<h1> Bienvenido </h1>';
}
if($edad < 18 || $nombre != 'Juan' ){
    echo '<h1> Eres menor de edad y no te llamas Juan </h1>';
}
?>