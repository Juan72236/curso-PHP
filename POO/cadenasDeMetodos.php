<?php

class User {
    public $name;
    public $mail;

    function __construct($name, $mail)
    {
        $this->name = $name;
        $this->mail = $mail;
    }

    public function showName(){
        echo 'Su nombre es: ' . $this->name . '<br />';
    }
    public function showMail(){
        echo 'Su correo es: ' . $this->mail . '<br />';
    }
}

$luisa = new User('Luisa', 'luisa@gmail.com');
$luisa->showName()->showMail(); // cadena de los metodos

