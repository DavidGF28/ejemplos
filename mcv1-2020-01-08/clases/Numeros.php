<?php


namespace clases;

class Numeros {
    public function __construct($valores=[]) {
    $this->valores =$valores;
    }
    public function GetMedia(){
    return $this->Media;}
    public function GetModa(){
    return $this->Moda;}
    public function GetMediana(){
    return $this->Mediana;}
    public function GetDesviacion(){
    return $this->Desviacion;
    }
    public function setMedia(){
        $this->media= array_sum($this->getValores())/count($this->getValores());
        
    }
    public function setModa(){
        $salida= array_count_values($this->getValores());
        $repeticionesMaximas=max($salida);
        $this->moda=[];
        foreach ($salida as $numeros=>$repes){
            If($repes==$repeticionesMaximas){
            $this->moda[]=$numeros;
            }
        }
    }
    public function setMediana(){
    $this->valores=Array();
    sort ($valores);
    $cantidad = count($valores);
    $posMediana=($cantidad+1)/2;
    }
    public function setDesviacion(){
        stats_standard_deviation($valores);
    }
}
