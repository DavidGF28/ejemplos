<?php

namespace clases\creadas;

class Numeros {
    
    public $suma;
    public $valores;
    public $resultados;
    public $resta;
    public $producto;
    public $cociente;
    public $resto;
       
    function __construct($n) {
        //$this->suma = $suma;
        $this->valores = $n;
        $this->setSuma();
        $this->setResta();
        $this->setProducto();
        //$this->setCociente();
        //$this->setResto();
        //$this->resultados = $resultados;
    }

    function getResta() {
        return $this->resta;
    }

    function getProducto() {
        return $this->producto;
    }

    function getCociente() {
        return $this->cociente;
    }

    function getResto() {
        return $this->resto;
    }

    function setResta() {
                $r=0;
                $r=0;
        $this->resta = $r;
    }

    function setProducto() {
                $p=1;
        foreach ($this->valores as $d){
            $p*=$d;
        }
        $this->producto = $p;
    }

    function setCociente() {
        $this->cociente = $cociente;
    }

    function setResto() {
        $this->resto = $resto;
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

    function setSuma() {
        $s=0;
        foreach ($this->valores as $d){
            $s+=$d;
        }
        $this->suma=$s;
    }

    function setValores($valores) {
        $this->valores = $valores;
    }

    function setResultados($resultados) {
        $this->resultados = $resultados;
    }

//funciones propias
    
}