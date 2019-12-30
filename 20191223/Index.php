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
        
        $objeto=new persona ("alumno1",32);
        var_dump($objeto);
        //echo $objeto;
        
        $objetoestudiante= new estudiante("alumno2", 50,[8,7,6],"carrera");
        var_dump($objetoestudiante);
        echo $objetoestudiante;
        $objetoestudiante->setNotas([1,2,3,4,5]);
        var_dump($objetoestudiante);
        echo $objetoestudiante->getNotas();
        
        $objetomateria=new materia ("Fisica",25);
        var_dump($objetomateria);
        $objetoprofesor=new profesor ("Pepe",56,$objetomateria,10,1200);
        var_dump($objetoprofesor);
        $objetoprofesor->getMateria()->setnombre("Lengua");
        var_dump($objetomateria);
        var_dump($objetoprofesor);
        ?>
    </body>
</html>


