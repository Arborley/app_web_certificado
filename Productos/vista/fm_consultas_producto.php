<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>
</head>
<body class="bg-body-secondary ">
    <div class="container" style="margin-top: 25%;">
        <div class="card p-3">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <h2>ID del producto</h2>
                    <form action="../controlador/controlador_productos.php?action=consultar" method="POST">
                        <div class="form-group">
                            <label for="id">Id del producto:</label>
                            <input class="form-control" id="id" name="id" type="number" placeholder="Id:">
                        </div>
                        <div class="btn-group btn-group-justified" style="padding-top: 5%;">

                            <button type="submit" class="btn btn-warning text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                                <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" />
                                <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11" />
                            </svg>
                                Consulta
                            </button>

                            <a href="../index_productos.php" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                            <a href="../../index.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Inicio</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>