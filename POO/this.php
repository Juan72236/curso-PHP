<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de: ' . $this->pais;
    }
}

$juan = new Persona;
$juan->nombre = 'Juan Pablo';
$juan->edad = 22;
$juan->pais = 'Colombia';
$juan -> mostrarInformacion();

echo '<br />';

$Alejandro = new Persona;
$Alejandro->nombre = 'Alejandro';
$Alejandro->edad = 35;
$Alejandro->pais = 'Polonia';
$Alejandro -> mostrarInformacion();