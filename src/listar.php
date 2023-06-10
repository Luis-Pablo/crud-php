<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('conexion.php');

    $sql = "SELECT id, nombre, apellido FROM usuarios;";

    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){

        while($row = $resultado->fetch_assoc()){
            echo "<hr> id asociado: " . $row
            ["id"] . "nombre Usuario: " . $row
            ["nombre"] . " " . $row["apellido"] .
            "<hr>";
        }


    }else{
        echo "sin informacion que mostrar";
    }
    $conexion->close();

    ?>
</body>
</html>