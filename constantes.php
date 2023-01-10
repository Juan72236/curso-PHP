<?php

/**
 * Constante: Una constante es similar a una variable, con la diferencia que este valor se establece una sola vez y no se puede modificar mas. No obstante, si se puede usar ese valor varias veces.
 */
// SINTAXIS DE UNA CONSTANTE EN PHP
define('PI', 3.14);
echo PI;
/** Las constantes son globales */
define('NOMBRE', 'juan');
echo NOMBRE;
?>