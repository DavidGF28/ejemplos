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
    
    public function __construct($nombre, $edad, materia $materia,$mes=1, $sueldo=0) {
        $this->sueldo= array_fill(0,12,0.0);
        $this->setMateria($materia);
        $this->setSueldo($mes,$sueldo);
        parent::__construct($nombre, $edad);
    }


}