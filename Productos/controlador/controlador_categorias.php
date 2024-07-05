<?php
// Incluir el archivo de configuración
require_once '../../config.php';

// Incluir el modelo de Productos
require_once PRODUCTOS_MODEL_PATH . '/modelo_categorias.php';
require_once PRODUCTOS_MODEL_PATH . '/modelo_productos.php';


if (isset($_POST['id_categoria'])) {
    $id = $_POST['id_categoria'];
}
if (isset($_GET['id_categoria'])) {
    $id = $_GET['id_categoria'];
}



if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch($action) {
    case'consultar':
    consultar();
    break;

}


if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $nombre = $tasa_iva = $activo = $id_categoria = "";

    if(isset($_POST['accion'])){
        switch ($_POST['accion']){
            case 'crear':
                $nombre = limpiar_dato($_POST['nombre']);
                $tasa_iva = limpiar_dato($_POST['tasa_iva']);
                $activo = limpiar_dato($_POST['activo']);
                

                if(empty($nombre) || empty($tasa_iva) || empty($activo)){



                }else{
                    
                }

                break;
            case 'actualizar':
                break;
            case 'eliminar':
                break;
            case 'consultarid':
                break;
        }

    }
        


}




?>