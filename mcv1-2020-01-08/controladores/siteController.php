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
        public function Ejercicio1Accion(){
      $this->render([
          "vista"=>"ejercicio1",
          "pie"=> $this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio1"))->html()
    ]);
   }
           public function Ejercicio2Accion(){
      $this->render([
          "vista"=>"ejercicio2",
          "pie"=> $this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio1"))->html()
    ]);
   }
              public function Ejercicio3Accion(){
      $this->render([
          "vista"=>"ejercicio3",
          "pie"=> $this->miPie,
          "menu"=>(new \clases\Menu($this->miMenu,"Ejercicio1"))->html()
    ]);
   }
}