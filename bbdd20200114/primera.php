<?php
//conexion
$conexion = mysqli_connect("127.0.0.1", "root", "");
var_dump($conexion);
//selecionar DB
$conexion->select_db("videoteca");
var_dump($conexion);
//preparar result
$resultado=$conexion->query("select * from actor");
var_dump($resultado);
//ver result
$salidaArray=$resultado->fetch_all();
var_dump($salidaArray);
//rebobinar
$resultado->data_seek(0);
//volver a ver
$salidaArray=$resultado->fetch_all(MYSQLI_ASSOC);
var_dump($salidaArray);