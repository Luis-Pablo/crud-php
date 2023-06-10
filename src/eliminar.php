<?php

include_once('conexion.php');

$sql = "DELETE FROM usuarios WHERE id = 4;";

if($conexion->query($sql) === TRUE){
    echo "Eliminacion exitosa";
}else{
    echo $conexion->error;
}