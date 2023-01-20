<?php

/* class Person {
    public $day = '7 de Septiembre';

    public function saludo(){
        return 'Hola, Buen dia ';
    }
}

$juan = new Person;
echo $juan -> day; */

//la palabra static nos va a permitir acceder a los metodos y atributos sin tener que instanciarlos.    

class Person {
    public static $day = '7 de Septiembre';

    public function saludo(){
        return 'Hola, Buen dia ';
    }
}

echo Person::$day;