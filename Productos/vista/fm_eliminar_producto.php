<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class = "bg-secondary">
    <div>
        <?php
        require_once '../controlador/controlador_productos.php';
        $id = $_GET['id'];

        $producto = obtener_productos_por_id($id);

        ?>
        <div class="formulario container mt-5 border border-dark pb-3 card">
            <form action="../controlador/controlador_productos.php" method="post" class="ma-5">
                <input type="hidden" name="accion" value="eliminar">
                <h2 class="text-center mt-3">Eliminar Producto</h2>
                <div class="d-flex">
                    <label class="col-md-2" for="id_producto">ID:</label>
                    <input name="id_producto" class="form-control w-80" value="<?php echo $producto['id_producto'] ?>" readonly>
                </div>
                <div class="d-flex mt-4">
                    <label class="col-md-2" for="nombre">Nombre:</label>
                    <input type="text" class="form-control w-80" id="nombre" name="nombre" value="<?php echo $producto['nombre'] ?>">
                </div>
                <div class="d-flex mt-4">
                    <label class="col-md-2" for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control w-80" id="descripcion" name="descripcion" value="<?php echo $producto['descripcion'] ?>">
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-regular fa-paper-plane"></i>
                        Eliminar</button>
                </div>
            </form>
        </div>
        <div class="container text-center mt-5 ">
            <a href="listado_productos.php">
                <button class="btn btn-primary w-25">
                    <i class="fa-solid fa-arrow-left"></i>
                    Volver a listado de productos
                </button>
            </a>
        </div>
    </div>
</body>
</body>

</html>