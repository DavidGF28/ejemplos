<?php
    function operaciones ($num1,$num2){
            $resultado = [
                'suma' => $num1+$num2,
                'resta' => $num1-$num2,
                'producto' =>$num1*$num2,
                'cociente' =>$num1/$num2,
            ];
        return $resultado;
    }
    $resultados=operaciones(80,8);
    foreach ($resultados as $operacion => $valor) {
        echo "<div>$operacion:$valor</div>";
    }
?>

