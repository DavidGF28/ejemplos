<?php
//conexion
$conexion = mysqli_connect("127.0.0.1", "root", "");

//selecionar DB
$conexion->select_db("videoteca");

//preparar result
$salida=$conexion->query("show Tables");
// mostrarlo
$mostrar=$salida->fetch_all();
var_dump($mostrar);

foreach ($mostrar as $valor){
    echo "<li><a href>".$valor[0]."<a></li>";
}