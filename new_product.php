<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/new_product.css">
    <title>Nuevo Producto</title>
</head>

<body background="img/materiales.jpg">
    <div class="contenedor">
        <div class="menu">
            <div class="logo">
                <h2>Nuevo producto</h2>
            </div>
            <ul class="ul_div">
                <li><a href="new_user.php">Nuevo Usuario</a></li>
                <li><a class="active" href="new_product.php">Nuevo Producto</a></li>
                <li><a href="list_employees.php">Lista de empleados</a></li>
                <li><a href="list_products.php">Lista de productos</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
        <div class="formulario">
            <form action="save_product.php" method="post">
                <h2 class="subtitulo">Ingresa un nuevo producto</h2>
                <label for="">Nombre del producto</label>
                <br>
                <input type="text" placeholder="Producto" name="nombre_producto">
                <br><br>
                <label for="">Cantidad</label>
                <br>
                <input type="number" placeholder="Cantidad" name="cantidad">
                <br><br>
                <label for="">Descripcion del producto</label>
                <br>
                <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                <br><br>
                <button class="guardar_producto">Guardar</button>
            </form>
        </div>
        <footer>
            <h3>&copy; Derechos reservados</h3>
        </footer>
    </div>
</body>

</html>