<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de: ' . $this->pais;
    }
}

$juan = new Persona('Juan Pablo', 22, 'Colombia');
/* $juan->nombre = 'Juan Pablo';
$juan->edad = 22;
$juan->pais = 'Colombia';*/
$juan -> mostrarInformacion(); 

echo '<br />';

$Alejandro = new Persona('Alejandro', 35, 'Polonia');
/* $Alejandro->nombre = 'Alejandro';
$Alejandro->edad = 35;
$Alejandro->pais = 'Polonia';*/
$Alejandro -> mostrarInformacion(); 