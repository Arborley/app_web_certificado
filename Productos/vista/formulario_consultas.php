<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 border">
                <br>
                <h3>Id del contacto</h3>
                <form action="../controlador/controlador_productos.php?action=consultar" method="POST">
                    <div class="form-group">
                        <label for="id">id_producto:</label>
                        <input class="form-control" id="id" name="id" type="number" placeholder="Id:">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Consulta</button>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <a href="http://localhost:8080/hilariocurso/Equipo1/app_web/" class="btn btn-success">Volver</a>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../../../AprendiendoBootstrap/Bootstrap3/intro/js/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>