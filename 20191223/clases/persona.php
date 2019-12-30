<?php

namespace clases;

class persona{
    private $nombre;
    public $edad;
    
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    public function estudios(){
        return "mis estudios son...";
    }
    public function __construct($nombre,$edad) {
        $this->setEdad($edad);
        $this->setNombre($nombre);
    }
}
