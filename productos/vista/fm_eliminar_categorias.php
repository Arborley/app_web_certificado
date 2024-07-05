<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>
</head>

<body class = "bg-secondary">
    <div>
        <?php
        require_once '../controlador/controlador_categorias.php';
        $id = $_GET['id'];

        $categoria = obtener_categorias_por_id($id);

        ?>
        <div class="formulario container mt-5 border border-dark pb-3 card">
            <form action="../controlador/controlador_categorias.php" method="post" class="ma-5">
                <input type="hidden" name="accion" value="eliminar">
                <h2 class="text-center mt-3">Eliminar Categoria</h2>
                <div class="d-flex">
                    <label class="col-md-2" for="id_categoria">ID:</label>
                    <input name="id_categoria" class="form-control w-80" value="<?php echo $categoria['id_categoria'] ?>" readonly>
                </div>
                <div class="d-flex mt-4">
                    <label class="col-md-2" for="nombre">Nombre:</label>
                    <input type="text" class="form-control w-80" id="nombre" name="nombre" value="<?php echo $categoria['nombre'] ?>">
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-regular fa-paper-plane"></i>
                        Eliminar</button>
                </div>
            </form>
        </div>
        <div class="container text-center mt-5 ">
            <a href="listado_categorias.php">
                <button class="btn btn-primary">
                    <i class="fa-solid fa-arrow-left"></i>
                    Listado de Categorias
                </button>
            </a>
        </div>
    </div>
</body>
</body>

</html>