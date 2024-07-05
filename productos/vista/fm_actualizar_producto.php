<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary">
    <div>
        <?php
        require_once '../controlador/controlador_productos.php';
        $id = $_GET['id'];

        $producto = obtener_productos_por_id($id);

        ?>
        <div class="bg-white container mt-5 border border-dark pb-3 card">
            <form action="../controlador/controlador_productos.php" method="post">
                <input type="hidden" name="accion" value="actualizar">
                <h2 class="text-center mt-3">Actualizar Producto</h2>
                <div class="d-flex">
                    <label class="col-md-2" for="id_producto">ID:</label>
                    <input name="id_producto" class="form-control w-75" value="<?php echo $producto['id_producto'] ?>" readonly>
                </div>
                <div class="d-flex mt-4">
                    <label class="col-md-2" for="nombre">Nombre:</label>
                    <input type="text" class="form-control w-75" id="nombre" name="nombre" value="<?php echo $producto['nombre'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2" for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control w-75" id="descripcion" name="descripcion" value="<?php echo $producto['descripcion'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2" for="precio">Precio:</label>
                    <input type="text" class="form-control w-75" id="precio" name="precio" value="<?php echo $producto['precio'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2" for="impuesto">Impuesto:</label>
                    <input type="text" class="form-control w-75" id="impuesto" name="impuesto" value="<?php echo $producto['impuesto'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2" for="id_categoria">id_categoria:</label>
                    <input type="text" class="form-control w-75" id="id_categoria" name="id_categoria" value="<?php echo $producto['id_categoria'] ?>">
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success">
                        <i class="fa-regular fa-paper-plane"></i>
                        Actualizar</button>
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

</html>