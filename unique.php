<?php
include('connection_BD.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/edit_product.css">
    <title>Vista del producto</title>
</head>

<body background="img/materiales.jpg">
    <div class="contenedor">
        <div class="menu">
            <div class="logo">
                <h2>Editar producto</h2>
            </div>
            <ul class="ul_div">
                <li><a href="new_user.php">Nuevo Usuario</a></li>
                <li><a href="new_product.php">Nuevo Producto</a></li>
                <li><a href="list_products.php">Lista de productos</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
        <div class="tabla">
            <form action="update.php" method="post">
                <table>
                    <tr>
                        <th>ID productos</th>
                        <th>Nombre del prodcuto</th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Fecha de resgistro</th>
                        <th>Acción</th>
                    </tr>
                    <?php
                    $id = $_GET['id'];
                    $selection = "SELECT * FROM productos WHERE idproductos = '$id'";
                    $valid = mysqli_query($conexion, $selection);
                    while ($result = mysqli_fetch_array($valid)) {
                    ?>
                        <tr>
                            <td><input type="text" name="idproductos" readonly value="<?php echo $result['idproductos'] ?> "></td>
                            <td><input type="text" name="nombre_producto" value="<?php echo $result['nombre_producto'] ?>"></td>
                            <td><input type="number" name="cantidad" value="<?php echo $result['cantidad'] ?>"></td>
                            <td><textarea name="descripcion_producto" id="descripcion" cols="30" rows="10"><?php echo $result['descripcion_producto'] ?></textarea></td>
                            <td><input type="text" name="fecha_registro_producto" value="<?php echo $result['fecha_registro_producto'] ?>"></td>
                            <td><button class="boton">Guardar Cambios</button></td>
                        <?php
                    }
                        ?>
                        </tr>
                </table>
            </form>
        </div>
        <footer>
            <h3 class="footer">&copy; Derechos reservados</h3>
        </footer>
    </div>
</body>

</html>