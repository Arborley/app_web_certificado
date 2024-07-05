<?php
// Incluir el archivo de configuración
require_once '../../config.php';

// Incluir el modelo de Productos
require_once PRODUCTOS_MODEL_PATH . '/modelo_productos.php';

if (isset($_POST['id_producto'])) {
    $id = $_POST['id_producto'];
}

if (isset($_GET['id_producto'])) {
    $id = $_GET['id_producto'];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];


    switch ($action) {
        case 'consultar':
            consulta();
            break;
    }
}




if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $nombre = $descripcion = $precio = $impuesto = $id_categoria = "";

    if (isset($_POST['accion'])) {
        switch ($_POST['accion']) {
            case 'alta':
                $nombre = limpiar_dato($_POST['nombre']);
                $descripcion = limpiar_dato($_POST['descripcion']);
                $precio = limpiar_dato($_POST['precio']);
                $impuesto = limpiar_dato($_POST['impuesto']);
                $id_categoria = limpiar_dato($_POST['id_categoria']);

                if (empty($nombre) || empty($descripcion) || empty($precio) || empty($impuesto) || empty($id_categoria)) {
                    echo 'Todos los datos son obligatorios';
                    echo '<br>';
                    echo '<a href="../vista/formulario_altas.php"><button class="btn btn-primary w-25"><i class="fa-solid fa-arrow-left"></i>
                    Volver a listado de productos</button></a>';
                } else {
                    insertar_productos($nombre, $id_categoria, $precio, $descripcion, $impuesto);
                    echo 'Producto añadido correctamente!';
                    header("Location: ../vista/listado_productos.php");
                }
                break;

            case 'eliminar':
                if (empty($id)) {
                    echo 'El campo ID es obligotio';
                    echo '<br>';
                    echo '<a href="../vista/formulario_altas.php"><button class="btn btn-primary w-25"><i class="fa-solid fa-arrow-left"></i>
                    Volver a listado de productos</button></a>';
                } else {
                    eliminar_producto($id);
                    echo '¡Producto eliminado correctamente!';
                }
                break;
            case 'actualizar':
                $nombre = limpiar_dato($_POST['nombre']);
                $descripcion = limpiar_dato($_POST['descripcion']);
                $precio = limpiar_dato($_POST['precio']);
                $impuesto = limpiar_dato($_POST['impuesto']);
                $id_categoria = limpiar_dato($_POST['id_categoria']);
                if (empty($nombre) || empty($descripcion) || empty($precio) || empty($impuesto) || empty($id_categoria)) {
                    echo 'Todos los datos son obligatorios';
                } else {
                    actualizar_producto($id, $nombre, $descripcion, $precio, $impuesto, $id_categoria);
                    echo '¡Producto actualizado correctamente!';
                }
                break;
            case 'listar':
                $nombre = limpiar_dato($_POST['nombre']);
                $descripcion = limpiar_dato($_POST['descripcion']);
                $precio = limpiar_dato($_POST['precio']);
                $impuesto = limpiar_dato($_POST['impuesto']);

                echo '<a href = "../vista/listado_productos.php"></a>';
                break;
            case 'consultarID':
                $id = $_POST['id'] ?? null;
                $boton = $_POST['boton'] ?? null;
                if (empty($id)) {
                    echo 'El campo ID es obligatorio';
                } else {

                    if ($id !== null && $boton !== null) {
                        switch ($boton) {
                            case 'borrarid':

                                header("Location: ../vista/fm_eliminar_producto.php?id=$id");
                                break;
                            case 'modificarid':
                                // Redirigir a la página de modificar con el ID correspondiente
                                header("Location: ../vista/fm_actualizar_producto.php?id=$id");
                                break;
                            case 'consultarid':
                                // Redirigir a la página de consultar con el ID correspondiente
                                header("Location: ../vista/pantalla_datos.php?id=$id");
                                break;
                        }
                    } else {
                        echo 'ID no proporcionado';
                    }
                    break;
                }
        }
    }
}
