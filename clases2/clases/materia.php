<?php

namespace clases;

class materia{
    public $nombre;
    private $horas;
    private $titular;
    
    function getNombre() {
        return $this->nombre;
    }

    function getHoras() {
        return $this->horas;
    }

    function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    function setHoras(int $horas) {
        $this->horas = $horas;
    }
    
    function getTitular() {
        return $this->titular;
    }

    function setTitular($titular) {
        $this->titular = $titular;
    }

    function __construct($argumentos=[]) {
            $opcionales=[
            "Nombre"=>"",
            "Horas"=>0,
//            "Titular"=>new profesor([
//                "Nombre"=>"profesor por defecto",
//                "Edad"=> 30,
//                "Materias"=>[$this]
//            ]),
                "Titular"=>null,
        ];
        $argumentos=array_merge($opcionales,$argumentos);    
        $this->setNombre($argumentos["Nombre"]);
        $this->setHoras ($argumentos["Horas"]);
        $this->SetTitular($argumentos["Titular"]);
    }

    
}

