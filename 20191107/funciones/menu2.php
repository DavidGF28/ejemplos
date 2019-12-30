<?php
function crear ($menu){
    $salida=[];
    foreach ($menu as $nombre => $contenido) {
        $submenu="<ul id=\"$nombre\">";
        foreach ($contenido as $e => $u){
        $submenu.='<li><a href="'.$u.'">'.$e.'</a></li>';   
    }
    $submenu.='</ul>';
    $salida[$nombre]= $submenu;
    }
    return $salida;
}
//[
//    '<ul in="menu1">',
//    '<ul in="menu2">'
//];

 $a=crear([
        "menu1"=> [
             "etiqueta" => "url",
             "etiqueta1" => "url1",
         ],
        "menu2"=>[
             "etiqueta2" => "url2",
             "etiqueta3" => "url3",
         ],
     ]
 );
 
 echo $a["menu1"];
 echo $a["menu2"];