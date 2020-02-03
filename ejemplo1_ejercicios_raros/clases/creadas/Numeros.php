<?php

namespace clases;

class Numeros {
    
    public $suma;
    public $valores;
    public $resultados;
    
    function __construct() {
        $this->suma = $suma;
        $this->valores = $valores;
        $this->resultados = $resultados;
    }

    function getSuma() {
        return $this->suma;
    }

    function getValores() {
        return $this->valores;
    }

    function getResultados() {
        return $this->resultados;
    }

    function setSuma($suma) {
        $this->suma = $suma;
    }

    function setValores($valores) {
        $this->valores = $valores;
    }

    function setResultados($resultados) {
        $this->resultados = $resultados;
    }


}