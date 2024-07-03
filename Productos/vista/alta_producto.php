<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de productos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Formulario de alta de productos</h2>
                <form action="../controlador/controlador_alta_productos.php" method="POST">
                    <div>
                        <label for="nombre">Producto:</label>
                        <input type="text" id="nombre" name="nombre"><br><br>

                        <label for="precio">Precio:</label>
                        <input type="number" id="precio" name="precio"><br><br>

                        <label for="descripcion">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion"><br><br>

                        <label for="categoria">:</label>
                        <input type="text" id="categoria" name="categoria"><br><br>
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mt-4">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <a href="../index.php"><button class="btn btn-danger">Volver a Inicio</button></a>
    </div>
</body>