<?php

namespace clases;

class materia{
    public $nombre;
    private $horas;
    //private $titular;
    
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

    function __construct(string $nombre,int $horas) {
            $opcionales=[
            "Materia"=>"",
            "Horas"=>0,
            "Titular"=>new profesor(),  
        ];
        //$argumentos=array_merge($opcionales,$argumentos);    
        $this->nombre($argumentos["Nombre"]);
        $this->horas ($argumentos["Horas"]);
        $this->titular($argumentos["Titular"]);
    }

    
}

