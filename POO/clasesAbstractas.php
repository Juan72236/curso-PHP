<?php

//el concepto de clases abstractas refiere a una forma de protejer nuestras clases
//no es posible acceder a ellas a menos que las heredemos.

abstract class Personas {
    public function saludo(){
        return 'Hola';
    }
}

class Estudiantes extends Personas{

}

$juan = new Estudiantes;
echo $juan -> saludo();