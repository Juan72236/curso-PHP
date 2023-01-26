<?php

/* if(file_exists('documento.txt')){
    echo "El archivo existe";
}else{

    echo "el archivo no existe";
} */

/* echo file_get_contents('documento.txt'); leer archivos */

file_put_contents('documento.txt', 'Hola mundo', FILE_APPEND);
?>