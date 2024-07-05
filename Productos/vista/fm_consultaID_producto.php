<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require_once('../controlador/controlador_productos.php');
    $accion = $_GET['accion'];

    $modificarid = 'fm_actualizar_producto.php';
    $borrarid = 'fm_eliminar_producto.php';
   

    ?>
    <div class="formulario container mt-5 border border-dark mb-3 text-center card">
        <h2 class="lead" style="font-size: xx-large;" ><strong>Consulta ID</strong></h2>
        <form action="../controlador/controlador_productos.php" method="POST">
            <input type="hidden" name="accion" value="consultarID">
            <div class="form-group">
                <label for="id" class="lead" ><strong>¿Qué producto quieres usar?</strong></label>
                <input type="number" class="form-control" id="id" name="id" placeholder="Id:">
            </div>
            <div class="form-group text-center my-3">
                <?php
                if ($accion == 'borrar') {
                ?>
                    <a href="<?php echo $borrarid ?>">
                        <button class="btn btn-danger max-width text-white" name="boton" value="borrarid">
                            <i class="fa fa-trash"></i> BORRAR
                        </button>
                    </a>
                <?php
                } elseif ($accion == 'modificar') {
                ?>
                    <a href="<?php echo $modificarid  ?>">
                        <button class="btn btn-success max-width text-white" name="boton" value="modificarid">
                            <i class="fa fa-pencil"></i> MODIFICAR
                        </button>
                    </a>
                <?php
                } elseif ($accion == 'consulta') {
                ?>
                    <a href="<?php echo $consultarid  ?>">
                        <button class="btn btn-warning max-width text-black" name="boton" value="consultarid">
                            <i class="fa-solid fa-magnifying-glass"></i> CONSULTAR
                        </button>
                    </a>
                <?php
                }
                ?>
            </div>
        </form>
    </div>
    <div class="container text-center mt-5 ">
        <div class="text-center mt-5">
            <a href="../index_productos.php"><button class="btn btn-primary">
                    <i class="fa-solid fa-arrow-left"></i>    Inicio</button></a>
        </div>
    </div>

</body>

</html>