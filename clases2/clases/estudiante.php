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
    public function __construct($argumentos=[]) {
        $opcionales=[
            "Nombre"=>"",
            "Edad"=>0,
            "Notas"=>[],
            "Carrera"=>""
        ];
        $argumentos=array_merge($opcionales,$argumentos);
        $this->setCarrera($argumentos["Carrera"]);
        $this->setNotas($argumentos["Notas"]);
        parent::__construct([
            "Nombre"=>$argumentos["Nombre"],
            "Edad"=>$argumentos["Edad"]]);
    }
}