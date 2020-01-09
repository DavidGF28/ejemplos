<?php
namespace controladores;

class siteController extends Controller{
    private $miPie;
    private $miMenu;    
    
    public function __construct() {
        parent::__construct();
        $this->miPie="Ejemplo de clase";
        $this->miMenu=[
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Ejercicio1"=>$this->crearRuta(["accion"=>"ejercicio1"]),
            "Ejercicio2"=>$this->crearRuta(["accion"=>"ejercicio2"]),
            "Ejercicio3"=>$this->crearRuta(["accion"=>"ejercicio3"])
    ];     
    }
                
    
    public function indexAccion(){
      $this->render([
          "vista"=>"index",
          "pie"=> $this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Inicio"))->html()
    ]);
    }
        public function Ejercicio1Accion($objeto){
            $v="";
                        
            if (empty ($objeto->getValores())){
                $vista="ejercicio1";
                $pie=$this->miPie;
            }else{$pie= "estaban ordenados ascendentemente";
                $vista="resultadoEjercicio1";
            $v=$objeto->getValores()['numero'];
            sort($v);
            if ($v!==$objeto->getValores()['numero']){
            $pie="no estaban ordenados ascendentemente";}
            $v= join(",", $v);
            }
      $this->render([
          "vista"=>$vista,
          "pie"=> $pie,
          "resultado"=>$v,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio1"))->html()
    ]);
   }
           public function Ejercicio2Accion($objeto){
               $vocales=0;
               $vista="ejercicio2";
               
               if(!empty($objeto->getValores())){
                  $vista="rEjercicio2";
                  $texto= new \clases\Frase ($objeto->getValores()['frase']);
                  $vocales=$texto->getVocales();
               }
      $this->render([
          "vista"=>$vista,
          "pie"=> "ejercicio 2 de practica 4",
          "resultado"=>$vocales,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio2"))->html()
    ]);
   }
              public function Ejercicio3Accion(){
      $this->render([
          "vista"=>"ejercicio3",
          "pie"=> $this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio3"))->html()
    ]);
   }
}