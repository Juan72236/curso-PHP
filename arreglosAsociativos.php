<?php
// ARREGLOS ASOCIATIVOS

$alex = array('telefono' => '2938825', 'edad' => '25', 'apellido' => 'Chacon', 'pais' => 'Colombia');

echo 'la edad de alex es:' . ' ' . $alex['edad'] . '<br />';
echo 'el telefono de alex es:' . ' ' . $alex['telefono'] . '<br />';
echo 'el apellido de alex es:' . ' ' . $alex['apellido'] . '<br />';
echo 'el pais de alex es:' . ' ' . $alex['pais'] . '<br />';

$alex['telefono'] = '3186289425';
echo 'el nuevo telefono de alex es:' . ' ' . $alex['telefono'] . '<br />';

?>