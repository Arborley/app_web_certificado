<?php
require_once __DIR__ . '/../config.php';
require_once MODEL_PATH . 'modelo_listar.php';



if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $nombre = $descripcion = $precio = $impuesto= '';

    if (isset($_POST['formulario'])) {
        switch ($_POST['formulario']) {
            case 'listar':
                $nombre = limpiar_dato($_POST['nombre']);
                $descripcion = limpiar_dato($_POST['descripcion']);
                $precio = limpiar_dato($_POST['precio']);
                $impuesto = limpiar_dato($_POST['impuesto']);

                echo '<a href = "../vista/vista_listado_productos.php"></a>';
            break;
        }
    }
}

//Función para limpiar el dato obtenido en el formulario
function limpiar_dato($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
