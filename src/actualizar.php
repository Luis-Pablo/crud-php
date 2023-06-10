<?php

include_once('conexion.php');

$sql = "UPDATE usuarios SET apellido = 'Sevilla' WHERE id =2;";

if($conexion->query($sql) === TRUE){
    echo "Registro actualizado correctamente";
}else{
    echo $conexion->error;
}


$conexion->close();
?>
