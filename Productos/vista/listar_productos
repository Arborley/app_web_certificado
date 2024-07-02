<?php
$actualizar_producto = 'actualizar_producto.php?id=';
$borrar_producto = 'borrar_producto.php?id=';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Listado de Productos</h2>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>id_producto</th>
                    <th>id_categoría</th>
                    <th>nombre</th>
                    <th>descripción</th>
                    <th>precio</th>
                    <th>impuesto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                        <td><?php echo htmlspecialchars($producto['id_categoria'])?></td>
                        <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($producto['descripcion'])?></td>
                        <td><?php echo htmlspecialchars($producto['precio'])?></td>
                        <td><?php echo htmlspecialchars($producto['impuesto'])?></td>
                        <td>
                            <a href="<?php echo $actualizar_producto . $producto['id'] ;?>">
                                <button class="btn btn-secondary max-width text-white">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                            <a href="<?php echo $borrar_producto . $producto['id'] ;?>">
                                <button class="btn btn-secondary text-white">
                                <i class="fa-solid fa-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container text-center mt-5 mb-5">
        <a href="http://localhost/proyecto1/listar_andrea/index.php">
            <button class="btn btn-primary sm">
                <i class="fa-solid fa-arrow-left"></i>
                Volver a inicio
            </button>
        </a>
    </div>
</body>

</html>
