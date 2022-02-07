<?php
include('connection_BD.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/list_employees.css">
    <title>Lista de empleados</title>
</head>

<body background="img/materiales.jpg">
    <div class="contenedor">
        <div class="menu">
            <div class="logo">
                <h2>Productos en inventario</h2>
            </div>
            <ul class="ul_div">
                <li><a href="new_user.php">Nuevo Usuario</a></li>
                <li><a href="new_product.php">Nuevo Producto</a></li>
                <li><a class="active" href="list_employees.php">Lista de empleados</a></li>
                <li><a href="list_products.php">Lista de productos</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre del empleado</th>
                    <th>Edad</th>
                    <th>Contacto</th>
                    <th>Cargo</th>
                    <th>Fecha de registro</th>
                </tr>
                <?php
                $sql = "SELECT * FROM empleados";
                $request = mysqli_query($conexion, $sql);
                while ($resultado = mysqli_fetch_array($request)) {
                ?>
                    <tr>
                        <td><?php echo $resultado['cedula'] ?></td>
                        <td><?php echo $resultado['nombre_empleado'] ?></td>
                        <td><?php echo $resultado['edad'] ?></td>
                        <td><?php echo $resultado['telefono'] ?></td>
                        <td><?php echo $resultado['cargo'] ?></td>
                        <td><?php echo $resultado['fecha_registro'] ?></td>
                    <?php
                }
                    ?>
                    </tr>
            </table>
        </div>
        <footer>
            <h3>&copy; Derechos reservados</h3>
        </footer>
    </div>
</body>

</html>