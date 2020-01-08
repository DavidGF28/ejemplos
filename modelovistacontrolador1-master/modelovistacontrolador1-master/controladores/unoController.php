<?php

namespace controladores;

class unoController extends Controller{
    public function indexAccion() {
        $this->render([
            "vista"=>"uno",
            "pie"=> "Ejemplo primero de clase",
            "menu"=>(new \clases\Menu([
            "Inicio"=>$this->crearRuta(["accion"=>"index"]),
            "Listado 1"=>$this->crearRuta(["accion"=>"listar"]),
            "Entrada"=>$this->crearRuta(["accion"=>"entrada"]),
            "Listado 2"=>$this->crearRuta(["accion"=>"listado2"])
        ],"Inicio"))->html()
            ]);
    }
    
    public function holaAccion(){
        echo "Hola Clase";
    }
}
