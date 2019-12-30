<?php

namespace clases;

class estudiante extends persona{
    private $carrera;
    public $notas=[];
    function getCarrera() {
        return $this->carrera;
    }

    function getNotas() {
        return join (",",$this->notas);
    }

    function setCarrera(string $carrera) {
        $this->carrera = $carrera;
    }

    function setNotas($notas) {
        foreach ($notas as $v){
        $this->notas[] = $v;}
        //array_push($this->notas,$nota);
    }

    public function __toString() {
        return "Soy un estudiante";
    }
    public function __construct($nombre="", $edad=0,array $notas=[],string $carrera="") {
        $this->setCarrera($carrera);
        $this->setNotas($notas);
        parent::__construct($nombre, $edad);
    }
}