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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a7093f3be1.js" crossorigin="anonymous"></script>
</head>

<body class="bg-body-secondary">
    <?php
    $actualizar_producto = 'fm_actualizar_producto.php?id=';
    $eliminar_producto = 'fm_eliminar_producto.php?id=';
    ?>
    <div class="container-fluid mt-5 w-75">
        <h2 class="text-center">Listado de Productos</h2>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Id_producto</th>
                    <th>Id_categoría</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Impuesto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) : ?>
                    <?php
                        if($producto['activo'] == '0'){

                        ?>
                    <tr class="bg-alert-danger">
                        
                        <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                        <td><?php echo htmlspecialchars($producto['id_categoria'])?></td>
                        <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($producto['descripcion'])?></td>
                        <td><?php echo htmlspecialchars($producto['precio'])?></td>
                        <td><?php echo htmlspecialchars($producto['impuesto'])?></td>
                        <td>
                            <a href="<?php echo $actualizar_producto . $producto['id_producto'] ;?>">
                                <button class="btn btn-secondary max-width text-white">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                            <a href="<?php echo $eliminar_producto . $producto['id_producto'] ;?>">
                                <button class="btn btn-secondary text-white">
                                <i class="fa-solid fa-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }else{
                    ?>
                    <tr class="bg-alert-danger">
                        <td><?php echo htmlspecialchars($producto['id_producto']); ?></td>
                        <td><?php echo htmlspecialchars($producto['id_categoria'])?></td>
                        <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($producto['descripcion'])?></td>
                        <td><?php echo htmlspecialchars($producto['precio'])?></td>
                        <td><?php echo htmlspecialchars($producto['impuesto'])?></td>
                        <td>
                            <a href="<?php echo $actualizar_producto . $producto['id_producto'] ;?>">
                                <button class="btn btn-secondary max-width text-white">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                            <a href="<?php echo $eliminar_producto . $producto['id_producto'] ;?>">
                                <button class="btn btn-secondary text-white">
                                <i class="fa-solid fa-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container text-center mt-5 mb-5">
        <a href="../index_productos.php">
            <button class="btn btn-primary sm">
                <i class="fa-solid fa-arrow-left"></i>
                Volver a inicio
            </button>
        </a>
    </div>
</body>

</html>