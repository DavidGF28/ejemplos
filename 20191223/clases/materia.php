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

    function __construct(string $nombre,int $horas, profesor $titular) {
        $this->nombre($nombre);
        $this->horas ($horas);
        $this->titular($titular);
    }

}

