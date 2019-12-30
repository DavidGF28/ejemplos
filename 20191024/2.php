<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        // CREAR UN ARRAY
        $numeros=[
            1,4,5,6,7
        ];
                
        //variable contador
        $contador=0;
        
        
        while ($contador<count($numeros)){
            echo "<div>". $numeros[$contador]. "</div>";
            $contador++;
            
        }
        $contador=0;
        while ($contador<count($numeros)){
?>
        <div>
            <?= $numeros[$contador]?>
        </div>
<?php
        $contador++;
        }
        ?>
    </body>
</html>
