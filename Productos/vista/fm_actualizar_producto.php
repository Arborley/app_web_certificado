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
                <h2 class="text-center mt-3 lead" style="font-size: xx-large;" ><strong>Actualizar Producto</strong></h2>
                <div class="d-flex">
                    <label class="col-md-2 lead" for="id_producto"><strong>ID:</strong></label>
                    <input name="id_producto" class="form-control w-75" value="<?php echo $producto['id_producto'] ?>" readonly>
                </div>
                <div class="d-flex mt-4">
                    <label class="col-md-2 lead" for="nombre"><strong>Nombre:</strong></label>
                    <input type="text" class="form-control w-75" id="nombre" name="nombre" value="<?php echo $producto['nombre'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2 lead" for="descripcion"><strong>Descripcion:</strong></label>
                    <input type="text" class="form-control w-75" id="descripcion" name="descripcion" value="<?php echo $producto['descripcion'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2 lead" for="precio"><strong>Precio:</strong></label>
                    <input type="text" class="form-control w-75" id="precio" name="precio" value="<?php echo $producto['precio'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2 lead" for="impuesto"><strong>Impuesto:</strong></label>
                    <input type="text" class="form-control w-75" id="impuesto" name="impuesto" value="<?php echo $producto['impuesto'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2 lead" for="id_categoria"><strong>id_categoria:</strong></label>
                    <input type="text" class="form-control w-75" id="id_categoria" name="id_categoria" value="<?php echo $producto['id_categoria'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="lead" > <strong>Activo</strong>   
                        <input type="checkbox" id="activo" name="activo" class="activo" value="1" 
                        <?php if($producto['activo']  == '1'){?> checked <?php }else{}?>>  </label>
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
                <button class="btn btn-primary sm">
                <i class="fa-solid fa-arrow-left"></i>
                    Listado de Productos
                </button>
            </a>
        </div>
    </div>
</body>

</html>