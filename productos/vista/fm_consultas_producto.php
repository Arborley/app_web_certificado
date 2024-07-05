<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                            <button type="submit" class="btn btn-primary">Consulta</button>
                            <a href="../index_productos.php" class="btn btn-success">Volver</a>
                            <a href="../../index.php" class="btn btn-primary">Inicio</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>