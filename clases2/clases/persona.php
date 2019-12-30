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

    function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    function setEdad(int $edad) {
        $this->edad = $edad;
    }

    public function estudios(){
        return "mis estudios son...";
    }
    public function __construct($argumentos) {
        //foreach ($argumentos as $indice=>$valor){
        //    call_user_func([$this, "set" . $indice],$valor);
        //}
        $this->setEdad($argumentos["Edad"]);
        $this->setNombre($argumentos ["Nombre"]);
    }
}
