<?php


namespace clases;

class Numeros {
    public $valores;
    public $Media;
    public $Moda;
    public $Mediana;
    public $Desviacion;
    function getValores() {
        return $this->valores;
    }

    function setValores($valores) {
        $this->valores = $valores;
    }

        public function __construct($valores=[]) {
    $this->valores =$valores;
    $this->setMedia();
    $this->setModa();
    $this->setMediana();
    $this->setDesviacion();
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
        $this->Media= array_sum($this->getValores())/count($this->getValores());
        
    }
    public function setModa(){
        $salida= array_count_values($this->getValores());
        arsort($salida);
        $this->Moda=array_key_first($salida);
        if (count($salida)>1 and (reset($salida)==next($salida)))
            $this->Moda = false;
        else 
            $this->Moda = array_key_first($salida);

    }
    public function setMediana(){
     sort ($this->valores);
    $cantidad = count($this->valores);
    $posMediana=($cantidad+1)/2;
    $this->Mediana=$posMediana;
    }
    public function setDesviacion(){
        $c=0;
        foreach ($this->getValores() as $v){
            $c+=pow($v-$this->GetMedia(),2);
        }
        $c=$c/count($this->valores);
        $this->Desviacion=sqrt($c);
    }
    
    public function getResultados(){
        $salida="<ul>";
        $salida.="<li>la media es: ".$this->GetMedia()."</li>";
        $salida.="<li>la moda es: ".$this->GetModa()."</li>";
        $salida.="<li>la mediana es: ".$this->GetMediana()."</li>";
        $salida.="<li>la desviacion es: ".$this->GetDesviacion()."</li>";
        $salida.="</ul>";
        return $salida;
    }
}
