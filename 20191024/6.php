<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>.caja1{background: silver;}
        .caja2{background: lime;}</style>
    </head>
    <body>
        <?php
        $enlaces=[
            [
                'url'=>'1.php',
                'clase'=>'caja1',
                'etiqueta'=>'Ejercicio1',
            ],
            
            [
                'url'=>'2.php',
                'clase'=>'caja2',
                'etiqueta'=>'Ejercicio2',
            ],
            
            [
                'url'=>'3.php',
                'clase'=>'caja1',
                'etiqueta'=>'Ejercicio3',
            ],
            [
                'url'=>'4.php',
                'clase'=>'caja2',
                'etiqueta'=>'Ejercicio4',
            ],
            [
                'url'=>'5.php',
                'clase'=>'caja1',
                'etiqueta'=>'Ejercicio5',
            ],
            [
                'url'=>'6.php',
                'clase'=>'caja2',
                'etiqueta'=>'Ejercicio6',
            ],
        ];
        //var_dump($enlaces);
        //foreach ($enlaces as $enlace){            var_dump($enlace);}
        ?>
        
        
        <ul>
           <?php foreach ($enlaces as $enlace)
           // funcion Isset ($enlace["clase"]) ? variable definida : mensaje no definido
           {
               //echo "<li class=\"", (isset($enlace["clase"])) ? $enlace["clase"] : "", "\"><a href=\"", $enlace["url"], "\">", $enlace["etiqueta"], "</a></li>";
           //
           echo "<li class=\"", $enlace["clase"], "\"><a href=\"", $enlace["url"], "\">", $enlace["etiqueta"], "</a></li>";
           };
           ?>
        </ul>
    </body>
</html>
