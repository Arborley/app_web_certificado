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
    $actualizar_categoria = 'fm_actualizar_categorias.php?id=';
    $eliminar_categoria = 'fm_eliminar_categorias.php?id=';
    ?>
    <div class="container-fluid mt-5 w-75"><h2 class="text-center lead"  style="font-size: xx-large;" ><strong>Listado de Categorias</strong></h2>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th class="lead" ><strong>Id_categoria</strong></th>
                    <th class="lead" ><strong>Nombre</strong></th>
                    <th class="lead" ><strong>Tasa IVA</strong></th>
                    <th class="lead" ><strong>Activo</strong></th>
                    <th class="lead" ><strong>Acciones</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria) : ?>
                    <?php
                        if($categoria['activo'] == '0'){

                        ?>
                    <tr class="bg-alert-danger">
                        
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['id_categoria'])?></strong></td>
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['nombre']); ?></strong></td>
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['tasa_iva'])?></strong></td>
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['activo'])?></strong></td>
                        <td class="lead" ><strong><a href="<?php echo $actualizar_categoria . $categoria['id_categoria'] ;?>">
                                <button class="btn btn-secondary max-width text-white">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                            <a href="<?php echo $eliminar_categoria . $categoria['id_categoria'] ;?>">
                                <button class="btn btn-secondary text-white">
                                <i class="fa-solid fa-trash"></i>
                                </button>
                            </a></strong>
                        </td>
                    </tr>
                    <?php
                    }else{
                    ?>
                    <tr class="bg-alert-danger">
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['id_categoria'])?></strong></td>
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['nombre']); ?></strong></td>
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['tasa_iva'])?></strong></td>
                        <td class="lead" ><strong><?php echo htmlspecialchars($categoria['activo'])?></strong></td>
                        <td class="lead" ><strong><a href="<?php echo $actualizar_categoria . $categoria['id_categoria'] ;?>">
                                <button class="btn btn-secondary max-width text-white">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </a>
                            <a href="<?php echo $eliminar_categoria . $categoria['id_categoria'] ;?>">
                                <button class="btn btn-secondary text-white">
                                <i class="fa-solid fa-trash"></i>
                                </button>
                            </a></strong>
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
                Inicio
            </button>
        </a>
    </div>
</body>

</html>