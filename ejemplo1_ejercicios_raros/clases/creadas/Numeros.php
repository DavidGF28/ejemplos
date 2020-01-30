<?php


namespace clases;

class Numeros {
    public $valores;

    function getValores() {
        return $this->valores;
    }

    function setValores($valores) {
        $this->valores = $valores;
    }

        public function __construct($valores=[]) {
    $this->valores =$valores;
    }
       
    public function getResultados(){}
}
