<?php
//  ARREGLOS INDEXADOS

/** Son variables que nos permiten almacenar multiples valores */

//arreglo que almacena los dias de la semana
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'); 

//para acceder a los valores del arreglo:
//echo $semana[1]; //martes
//echo $semana[6]; //domingo

//para modificar el valor de los arreglos, se accede a la posicion que se quiere modificar y se pone el nuevo valor. Luego se llama nuevamente el arreglo en esa posicion y se valida que el cambio se haya realizado

//llamando todos los elementos del arreglo y separandolos en una linea diferente
echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';
?>