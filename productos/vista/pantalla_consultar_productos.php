<?php   include_once "../../config.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de producto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>

</head>
<body class="bg-body-secondary ">
    <div class="container" style="margin-top: 15%;">
        <div class="card p-4">
            <h2 style="font-size: xx-large; text-align: center;" class="lead"><strong>Consulta de producto</strong></h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="lead"><strong>Id</strong></th>
                        <th class="lead"><strong>Nombre</strong></th>
                        <th class="lead"><strong>Descripción</strong></th>
                        <th class="lead"><strong>Precio</strong></th>
                        <th class="lead"><strong>Impuesto</strong></th>
                        <th class="lead"><strong>Categoría</strong></th>
                        <th class="lead"><strong>Iva</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>                    
                        <tr>
                            <td class="lead"><strong><?php echo htmlspecialchars($producto["id_producto"]); ?></strong></td>
                            <td class="lead"><strong><?php echo htmlspecialchars($producto["producto"]); ?></strong></td>
                            <td class="lead"><strong><?php echo htmlspecialchars($producto["descripcion"]); ?></strong></td>
                            <td class="lead"><strong><?php echo htmlspecialchars($producto["precio"]); ?></strong></td>
                            <td class="lead"><strong><?php echo htmlspecialchars($producto["impuesto"]); ?></strong></td>
                            <td class="lead"><strong><?php echo htmlspecialchars($producto["categoria"]); ?></strong></td>
                            <td class="lead"><strong><?php echo htmlspecialchars($producto["tasa_iva"]); ?></strong></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="row">
                    <div class="col-md-12" style="text-align: right;">
                    <a href="../index_productos.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Volver</a>
                    </div> 
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>