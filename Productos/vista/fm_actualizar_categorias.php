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
        require_once '../controlador/controlador_categorias.php';
        $id = $_GET['id'];

        $categoria = obtener_categorias_por_id($id);

        ?>
        <div class="bg-white container mt-5 border border-dark pb-3 card">
            <form action="../controlador/controlador_categorias.php" method="post">
                <input type="hidden" name="accion" value="actualizar">
                <h2 class="text-center mt-3 lead" style="font-size: xx-large;" ><strong>Actualizar Categoria</strong></h2>
                <div class="d-flex">
                    <label class="col-md-2 lead" for="id_categoria"><strong>ID:</strong></label>
                    <input name="id_categoria" class="form-control w-80" value="<?php echo $categoria['id_categoria'] ?>" readonly>
                </div>
                <div class="d-flex mt-4">
                    <label class="col-md-2 lead" for="nombre"><strong>Nombre:</strong></label>
                    <input type="text" class="form-control w-80" id="nombre" name="nombre" value="<?php echo $categoria['nombre'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="col-md-2 lead" for="tasa_iva"><strong>Tasa Iva:</strong></label>
                    <input type="number" class="form-control w-80" id="tasa_iva" name="tasa_iva" value="<?php echo $categoria['tasa_iva'] ?>">
                </div>
                <div class="d-flex mt-3">
                    <label class="lead" > <strong>Activo</strong>   
                        <input type="checkbox" id="activo" name="activo" class="activo" value="1" 
                        <?php if($categoria['activo']  == '1'){?> checked <?php }else{}?>>  </label>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success sm">
                        <i class="fa-regular fa-paper-plane"></i>
                        Actualizar</button>
                </div>
            </form>
        </div>
        <div class="container text-center mt-5 ">
            <a href="listado_categorias.php">
                <button class="btn btn-primary sm">
                    <i class="fa-solid fa-arrow-left"></i>
                    Volver
                </button>
            </a>
        </div>
    </div>
</body>

</html>