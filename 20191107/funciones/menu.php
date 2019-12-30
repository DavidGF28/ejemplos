<?php
function crear ($menu){
    $salida="<ul>";
    foreach ($menu as $e => $u){
        $salida.='<li><a href="'.$u.'">'.$e.'</a></li>';   
    }
    $salida.='</ul>';
    return $salida;
}

    echo crear([
        "etiqueta"=>"url",
        "etiqueta1"=>"url1",
        "etiqueta2"=>"url2",
        "etiqueta3"=>"url3",
        "etiqueta4"=>"url4",
        "etiqueta5"=>"url5",
    ]);