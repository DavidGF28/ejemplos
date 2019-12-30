<?php

function variable($argumentos){
    $salida=0;
    foreach ($argumentos as $v)
    {
        $salida+=$v;
    }
    return $salida;
}

$resultados= variable([211,214,94]);
echo "<div>$resultados</div>";

$resultados= variable([219,543,143]);
echo "<div>$resultados</div>";


