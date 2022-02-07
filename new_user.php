<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/new_user.css">
    <title>Registro de empleados</title>
</head>

<body background="img/materiales.jpg">
    <div class="contenedor">
        <div class="menu">
            <div class="logo">
                <h2>Registro de empleados</h2>
            </div>
            <ul class="ul_div">
                <li><a class="active" href="new_user.php">Nuevo Usuario</a></li>
                <li><a href="new_product.php">Nuevo Producto</a></li>
                <li><a href="list_products.php">Lista de productos</a></li>
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
        <div class="formulario">
            <form action="save_user.php" method="post">
                <h2 class="logotipo">Ingresa tus datos</h2>
                <label for="">Cedula</label>
                <br>
                <input type="number" placeholder="Numero de identificacion" name="cedula">
                <br><br>
                <label for="">Nombre y Apellidos</label>
                <br>
                <input type="text" placeholder="Nombre y Apellido" name="nombre_empleado">
                <br><br>
                <label for="">Edad</label>
                <br>
                <input type="number" placeholder="Edad" name="edad">
                <br><br>
                <label for="">Teléfono</label>
                <br>
                <input type="tel" placeholder="Numero de contacto" name="telefono">
                <br><br>
                <label for="">Cargo</label>
                <br>
                <input type="text" placeholder="Nombre del cargo" name="cargo">
                <br><br>
                <button class="guardar_usuario">Guardar</button>
            </form>
        </div>
        <footer>
            <h3 class="footer">&copy; Derechos reservados</h3>
        </footer>
    </div>
</body>

</html>