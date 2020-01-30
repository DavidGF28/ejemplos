<?php


namespace clases;

class Frase {
    public $cadena;
    public function __construct($a="") {
        $this->cadena=$a;
    }
    
    public function getVocales (){
        $vocales=["a","e","i","o","u","á","é","í","ó","ú"];
        $salida=0;
        
            foreach ($vocales as $valor){
                $salida+= substr_count(mb_strtolower($this->cadena),$valor);   
            }
        return $salida;
    }
}
