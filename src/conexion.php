<?php

$servidor = 'localhost';
$usuario = 'root';
$contrasena = 'root';
$bd = 'crud';

$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

if($conexion->connect_error){
    die('Hubo fallo en la conexion ' . $conexion->connect_error);
}