<?php
include('connection_BD.php');

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre_empleado"];
$edad = $_POST["edad"];
$telefono = $_POST["telefono"];
$cargo = $_POST["cargo"];

$save_user = "INSERT INTO empleados (cedula, nombre_empleado, edad, telefono, cargo) 
              VALUES ('$cedula','$nombre','$edad', '$telefono', '$cargo')";

$valid = mysqli_query($conexion, $save_user);

if ($valid) {
    header("location: index.php");
} else {
    echo "Error al registrar un usuario";
}
