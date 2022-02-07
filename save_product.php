<?php
include('connection_BD.php');

$nombre_producto = $_POST["nombre_producto"];
$cantidad = $_POST["cantidad"];
$descripcion = $_POST["descripcion"];

$save = "INSERT INTO productos (nombre_producto, cantidad, descripcion_producto) 
         VALUES ('$nombre_producto','$cantidad','$descripcion')";

$valid = mysqli_query($conexion, $save);

if ($valid) {
    header("location: index.php");
} else {
    echo "Error en el ingreso del producto";
}
