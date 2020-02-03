<?php

namespace controladores;

class siteController extends Controller {

    private $miPie;
    private $miMenu;

    public function __construct() {
        parent::__construct();
        $this->miPie = "ejercicios raros";
        $this->miMenu = [
            "Inicio" => $this->crearRuta(["accion" => "index"]),
            "Ejercicio1" => $this->crearRuta(["accion" => "ejercicio1"]),
            "Ejercicio2" => $this->crearRuta(["accion" => "ejercicio2"]),
            "Ejercicio3" => $this->crearRuta(["accion" => "ejercicio3"]),
            "Ejercicio4" => $this->crearRuta(["accion" => "ejercicio4"]),
            "Ejercicio5" => $this->crearRuta(["accion" => "ejercicio5"]),
            "Ejercicio6" => $this->crearRuta(["accion" => "ejercicio6"]),
            "Ejercicio7" => $this->crearRuta(["accion" => "ejercicio7"]),
        ];
    }

    public function indexAccion() {
        $this->render([
            "vista" => "index",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Inicio"))->html()
        ]);
    }

    public function Ejercicio1Accion($objeto) {
        //var_dump($objeto->getValores()["numero"]);
        if (isset($objeto->getValores()["numero"])){
            $n=new \clases\creadas\Numeros($objeto->getValores()["numero"]);
        }else{
            $n= new \clases\creadas\Numeros([0,0]);
        }
            
        $this->render([
            "vista" => "ejercicios/ejercicio1",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Ejercicio1"))->html(),
            "resultados"=>$n,
        ]);
    }

    public function Ejercicio2Accion($objeto) {
        //var_dump($objeto->getValores()["numero"]);
        if (isset($objeto->getValores()["numero"])){
            $n=new \clases\creadas\Numeros($objeto->getValores()["numero"]);
        }else{
            $n= new \clases\creadas\Numeros([0,0]);
        }
        $this->render([
            "vista" => "ejercicios/ejercicio2",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Ejercicio2"))->html(),
            "resultados"=>$n,    
        ]);
    }

    public function Ejercicio3Accion($objeto) {
        $this->render([
            "vista" => "ejercicios/ejercicio3",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Ejercicio3"))->html()
        ]);
    }

    public function Ejercicio4Accion($objeto) {
        $this->render([
            "vista" => "ejercicios/ejercicio4",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Ejercicio4"))->html()
        ]);
    }

    public function Ejercicio5Accion($objeto) {
        $this->render([
            "vista" => "ejercicios/ejercicio5",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Ejercicio5"))->html()
        ]);
    }

    public function Ejercicio6Accion($objeto) {
        $this->render([
            "vista" => "ejercicios/ejercicio6",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Ejercicio6"))->html()
        ]);
    }

    public function Ejercicio7Accion($objeto) {
        $this->render([
            "vista" => "ejercicios/ejercicio7",
            "pie" => $this->miPie,
            "menu" => (new \Clases\Menu($this->miMenu, "Ejercicio7"))->html()
        ]);
    }

}
