<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>
</head>
<style>
    .imagen {
        background-attachment: fixed;
        image-rendering: optimizeQuality;
        width: 93%;
        margin: 0 5%;
    }
</style>

<body class="imagen">
    <div class="d-flex mt-5">
        <div class="col-md-6 ">
            <img src="../img/logo-transparente.png" alt="" srcset="" class="imagen">
        </div>
        <div class="col-md-6" style="margin-top: 5%;">
            <div class="text-center">
                <h1 class="lead" style="font-size: xx-large;" ><strong>Productos</strong></h1>
                <div class="">
                    <div class="mt-3">
                        <a href="vista/fm_alta_producto.php" class="btn btn-primary" style="width: 30%;">
                            <i class="fas fa-user-plus"></i>
                            Ingresar Productos
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="vista/listado_productos.php" class="btn btn-secondary" style="width: 30%;">
                            <i class="fas fa-list"></i>
                            Listado Productos
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="vista/fm_consultaID_producto.php?accion=borrar" class="btn btn-danger" style="width: 30%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5" />
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> Borrar Productos
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="vista/fm_consultaID_producto.php?accion=modificar" class="btn btn-success" style="width: 30%;">
                            <i class="fas fa-edit"></i>
                            Modificar Productos
                        </a>
                    </div>
                    <div class="mt-3 sm">
                        <a href="vista/fm_consultas_producto.php" class="btn btn-warning text-secondary" style="width: 30%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                                <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" />
                                <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11" />
                            </svg>
                            Consultar Productos
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <h2 class="lead" style="font-size: xx-large;" ><strong>Categorias</strong></h2>
                <div class="">
                    <div class="mt-3">
                        <a href="vista/formulario_altas.php" class="btn btn-primary" style="width: 30%;">
                            <i class="fas fa-user-plus"></i>
                            Ingresar Categoria
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="vista/listado_productos.php" class="btn btn-secondary" style="width: 30%;">
                            <i class="fas fa-list"></i>
                            Listado Categoria
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="vista/formulario_consulta_id.php?accion=borrar" class="btn btn-danger" style="width: 30%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-dash-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5" />
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> Borrar Categoria
                        </a>
                    </div>
                    <div class="mt-3">
                        <a href="vista/formulario_consulta_id.php?accion=modificar" class="btn btn-success" style="width: 30%;">
                            <i class="fas fa-edit"></i>
                            Modificar Categoria
                        </a>
                    </div>
                    <div class="mt-3 sm">
                        <a href="vista/fm_consultas_categorias.php" class="btn btn-warning text-secondary" style="width: 30%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                                <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" />
                                <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11" />
                            </svg>
                            Consultar Categoria
                        </a>                        
                    </div>
                    <div class="mt-3 sm">
                    <a href="../index.php"><button class="btn btn-primary" style="width: 30%;"><i class="fa-solid fa-arrow-left"></i> Inicio</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</body>

</html>