<?php

function __autoload($nombre_clase){
    include ".\\" .$nombre_clase. '.php';
}
use clases\persona;
use clases\estudiante;
use clases\materia;
use clases\profesor;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            /*aspectos visuales*/
            *{
                margin: 0px;
                padding: 0px;
            }
        </style>
    </head>
    <body>
        <?php
        
        $objeto=new persona ([
            "Nombre"=>"alumno1",
            "Edad"=>32,]);
        var_dump($objeto);
        //echo $objeto;
        
        $objetoestudiante= new estudiante([
                "Nombre"=>"alumno2",
                "Edad"=>50,
                "Notas"=>[8,7,6],
                "Carrera"=>"Carrera"
            ]);
        var_dump($objetoestudiante);
        
        $oe=New Estudiante();
        var_dump($oe);

        
        //$objetomateria=new materia ("Fisica",25);
        //var_dump($objetomateria);
        $objetoprofesor=new profesor ([
               "Nombre"=>"Pepe",
               "Edad"=> 56,
               "Materias"=> [new Materia([
                   "Nombre"=>"Fisica",
                   "Horas"=>10
                   ])],
               "Mes"=>10,
               "Sueldo"=>1200,
            ]);
       var_dump($objetoprofesor);
//        //$objetoprofesor->getMateria()->setnombre("Lengua");
//        //var_dump($objetomateria);
        //var_dump($objetoprofesor);
        ?>
    </body>
</html>


