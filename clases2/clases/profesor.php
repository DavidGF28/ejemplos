<?php

namespace clases;


class profesor extends persona{
    private $materia;
    private $sueldo=[];
    
    function getMateria() {
        return $this->materia;
    }

    function getSueldo() {
        return $this->sueldo;
    }

    function setMateria(Materia $materia) {
        $this->materia = $materia;
    }

    function setSueldo(int $mes,float $sueldo) {
        $this->sueldo[$mes] = $sueldo;
    }
    
    public function __construct($argumentos=[]) {
        $opcionales=[
            "Mes"=>1,
            "Sueldo"=> 0,
        ];
        $this->sueldo= array_fill(0, 12, 0.0);
        $argumentos=array_merge($opcionales,$argumentos);
        
        $this->sueldo= array_fill(0,12,0.0);
        $this->setMateria($argumentos["Materia"]);
        $this->setSueldo($argumentos["Mes"],$argumentos["Sueldo"]);
         parent::__construct([
            "Nombre"=>$argumentos["Nombre"],
            "Edad"=>$argumentos["Edad"]
            ]);
    }
}