<?php

// Ejemplo sin POO
/* $nombre = 'Juan';
$edad = '22';
$pais = 'Colombia'; */


//clase:
class Persona {
    //atributos
    public $nombre;
    public $edad;
    public $pais;

    //metodos
    public function mostrarInformacion(){
        echo 'Hola Mundo';
    }
}

$juan = new Persona; //objeto
$juan->nombre = 'Juan Pablo';
$juan->edad  = 23;
$juan->pais = 'Colombia';

/* $juan->mostrarInformacion(); *///ejecucion del metodo
echo $juan->nombre . ' tiene ' . $juan->edad . ' años de edad ';

$geraldine = new Persona; //objeto
$geraldine->nombre = 'Geraldine';
$geraldine->edad = 30;
$geraldine->pais = 'España';