<?php

class Usuario {
    public $nombre; // con public, la propidedad puede ser accedida desde cualquier parte del codigo
    protected $correo;
    //protected $correo; Quiere decir que esta propiedad solo puede ser accedida desde dentro de la clase u otras que heredaron, pero no desde afuera
    //privated $nombre; Quiere decir que esta propiedad solo puede ser accedida desde dentro de la clase donde fue creada. Es decir que no se podrá llamar desde un objeto

    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    } 

    public function mostrarInfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario{
    public function mostarCorreo(){
        return 'Este es el correo: ' . $this->correo;
    }
}

$juan = new Miembro('Juan', 'juanpablov018@gmail.com');
echo $juan -> mostarCorreo(); 