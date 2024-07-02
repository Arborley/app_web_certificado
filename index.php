<?php
// index.php
require_once 'config.php';
require_once CONTROLLER_PATH . 'controlador_listar.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            margin-top: 350px;
            height: 100vh;
            width: 100vw;
            position: absolute;

        }
        #titulo{
            margin-top:-80px;
            height: 100vh;
            width: 100vw;
            position: absolute;
            
        }
    </style>
</head>

<body class="bg-body-secondary">
    <div class="container justify-content-center text-center ">
        <div class="m-5">
            <div class="d-flex justify-content-center">
                <h2 id="titulo">Productos</h2>
            </div>

            <div class="row d-flex justify-content-center align-items-center m-5">

                <div class="col-md-2">
                    <a href="vistas/formulario_altas.php" class="btn btn-success sm">
                        Agregar
                    </a>
                </div>

                <div class="col-md-2">
                    <a href="vista/vista_listado_productos.php" class="btn btn-secondary sm">
                        Listar
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="vistas/formulario_actualizar.php" class="btn btn-warning sm">
                        Actualizar
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="vistas/formulario_bajas.php" class="btn btn-danger sm">
                        Eliminar
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="vistas/formulario_id_contactos.php" class="btn btn-primary sm">
                        Consultar
                    </a>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
