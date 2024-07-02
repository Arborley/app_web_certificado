<?php   include_once "../config.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de contacto</title>
    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/css1.css">
</head>
<body>
    <div class="container mt-3">
        <h2>Consulta de contacto</h2>
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
        <br>
        <div class="row">                    
                <div class="col-md-12" style="text-align: right;">
                    <a href="http://localhost:8080/hilariocurso/Equipo1/app_web/vistas/formulario_consultas.php" class="btn btn-danger btn-lg">Volver</a>
                </div> 
        </div>
    </div>
</body>
</html>