<!DOCTYPEhtml>

<html>
    <head>
        <meta charset="UTF-8">
            <title></title>
                <?php
                    $cajas=[
                        "nombre"=>[
                        "id"=>"inombre",
                        "class"=>"clase1",
                            "style"=>[
                            "background-color"=>"gray",
                            "color"=>"white",
                            ],
                        "value"=>"Mi nombre",
                        "placeholder"=>"Escribe tu nombre",
                        "type"=>"text",
                        ],
                        "edad"=>[
                            "type"=>"number",
                            "placeholder"=>"Escribe tu edad",
                            ],
                        "poblacion"=>[
                        ]
                    ];

        $checks=[
            "colores"=>[
                "etiqueta"=>"escoje tu color",
                "elementos"=>[
                    [
                        "id"=>"irojo",
                        "name"=>"color[]",
                        "value"=> "rojo",
                        "etiqueta"=>"Rojo",
                        "style"=>[],
                        "class"=>"",
                    ],
                    
                ]
            ]
        ];
        function dibujarChecks($datos){
            $salida=[];
            foreach ($datos as $indice=>$grupo) {
                dibujarGrupo($grupo,$salida[$indice]);
            }
            return $salida;
    
        }
        function dibujarGrupo($grupo,&$s){
            $s.='<div>'.$grupo["etiqueta"] .'</div>';
            foreach ($grupo["elementos"] as $casilla){
                $s.=dibujarCasilla($casilla);
            }
        }
        function dibujarCasilla($casilla){
            $salida='<label for="'.$casilla["id"] .'">'.$casilla["etiqueta"].'</label><input type="checkbox" ';
      
            foreach ($casilla as $atributo => $v) {
                    if ($atributo=="style"){
                        $s="";
                        array_walk($v, function ($valor,$indice)use(&$s){
                            $s."$indice:$valor;";
                        });
                        $salida.=$atributo. '="'. $s . '="';
                    }elseif($atributo=='etiqueta'){
                        $salida.=$atributo. '="'. $v . '="';
                    }
            }
            $salida .='>';
            return $salida;        
        }


        function dibujarCajas($datos){
            $salida=[];
            foreach ($datos as $nombre => $opciones) {
                $defecto=[
                "id"=>"i".$nombre,
                "placeholder"=>"escribe tu " . $nombre,
                "type"=>"text",
                "name"=>$nombre,
                ];
                $salida[$nombre ]=dibujarCaja(array_merge($defecto,$opciones));
            }
        return $salida;
        }

        function dibujarCaja($datos){

        $salida='<labelfor="'. $datos["id"] .'">'. $datos["name"] .'</label>';
        $salida.='<input ';
            foreach ($datos as $atributo => $valor) {
                if(is_array($valor)){
                $todo='';
            foreach ($valor as $k => $v) {
            $todo.=$k . ':' . $v . ';';
            }
            $valor=$todo;
            }
            $salida.= $atributo . '="' . $valor . '" ';
            }
            $salida.=">";
        return $salida;
        }

        $controles=dibujarCajas($cajas);
        var_dump($controles);
        $casillas= dibujarChecks($checks);
        var_dump($casillas);      
                ?>
    </head>
    <body>
        <h1>Ejemplo de formulario dinamico</h1>
        <form name="unico">
        <div>
        <?= $controles["nombre"] ?>
        </div>
        <div>
        <?= $controles["edad"] ?>
        </div>
        <div>
        <?= $controles["poblacion"] ?>
        </div>
        <div>
            <?= $casillas["colores"] ?>
        </div>    


        <button>Enviar</button>
        </form>

    </body>
</html>
