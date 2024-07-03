<?php   include_once "../../config.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de producto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-body-secondary ">
    <div class="container" style="margin-top: 25%;">
        <div class="card p-4">
            <h2 style="text-align: center;">Consulta de producto</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id_producto</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Impuesto</th>
                        <th>Categoría</th>
                        <th>Iva</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>                    
                        <tr>
                            <td><?php echo htmlspecialchars($producto["id_producto"]); ?></td>
                            <td><?php echo htmlspecialchars($producto["producto"]); ?></td>
                            <td><?php echo htmlspecialchars($producto["descripcion"]); ?></td>
                            <td><?php echo htmlspecialchars($producto["precio"]); ?></td>
                            <td><?php echo htmlspecialchars($producto["impuesto"]); ?></td>
                            <td><?php echo htmlspecialchars($producto["categoria"]); ?></td>
                            <td><?php echo htmlspecialchars($producto["tasa_iva"]); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="row">
                    <div class="col-md-12" style="text-align: right;">
                        <a href="../vista/formulario_consultas.php" class="btn btn-primary">Volver</a>
                    </div> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>