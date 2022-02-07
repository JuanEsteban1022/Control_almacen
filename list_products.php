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
    <link rel="stylesheet" href="CSS/list_products.css">
    <title>Lista de productos</title>
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
                <li><a href="list_employees.php">Lista de empleados</a></li>
                <li><a class="active" href="list_products.php">Lista de productos</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <th>ID Productos</th>
                    <th>Nombre del producto</th>
                    <th>Cantidad</th>
                    <th>Descripción del producto</th>
                    <th>Fecha de registro</th>
                    <th>Editar</th>
                </tr>
                <?php
                $sql = "SELECT * FROM productos";
                $request = mysqli_query($conexion, $sql);
                while ($resultado = mysqli_fetch_array($request)) {
                ?>
                    <tr>
                        <td><?php echo $resultado['idproductos'] ?></td>
                        <td><?php echo $resultado['nombre_producto'] ?></td>
                        <td><?php echo $resultado['cantidad'] ?></td>
                        <td><?php echo $resultado['descripcion_producto'] ?></td>
                        <td><?php echo $resultado['fecha_registro_producto'] ?></td>
                        <td><a href="unique.php?id=<?php echo $resultado['idproductos']; ?>" </a>Editar</td>
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