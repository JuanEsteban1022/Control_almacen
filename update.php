<?php
include('connection_BD.php');

$id = $_POST['idproductos'];
$nombre_producto = $_POST["nombre_producto"];
$cantidad = $_POST["cantidad"];
$descripcion = $_POST["descripcion_producto"];
$fecha_registro_producto = $_POST['fecha_registro_producto'];

$update = "UPDATE productos SET nombre_producto = '$nombre_producto', cantidad = '$cantidad', descripcion_producto = '$descripcion', fecha_registro_producto = '$fecha_registro_producto'
           WHERE idproductos = '$id'";

$valid = mysqli_query($conexion, $update);

if ($valid) {
    header("location: list_products.php");
} else {
    echo "Error al actualizar los datos";
}
