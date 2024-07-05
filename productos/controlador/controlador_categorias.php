<?php
// Incluir el archivo de configuración
require_once '../../config.php';

// Incluir el modelo de Productos
require_once PRODUCTOS_MODEL_PATH . '/modelo_categorias.php';


if (isset($_POST['id_categoria'])) {
    $id = $_POST['id_categoria'];
}

if (isset($_GET['id_categoria'])) {
    $id = $_GET['id_categoria'];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];


switch($action) {
    case'consultar':
    consultar();
    break;
    }
}
if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $nombre = $tasaiva = $activo = $id_categoria = "";

    if (isset($_POST['accion'])) {
        switch ($_POST['accion']) {
            case 'alta':
                $nombre = limpiar_dato($_POST['nombre']);
                $tasa_iva = limpiar_dato($_POST['tasa_iva']);
                


                if (empty($nombre) || empty($tasa_iva)) {
                    echo 'Todos los datos son obligatorios';
                    echo '<br>';
                    echo '<a href="../vistas/fm_alta_categorias.php"><button class="btn btn-primary w-25"><i class="fa-solid fa-arrow-left"></i>
                    Formulario</button></a>';
                } else {
                    insertar_categorias($nombre, $tasa_iva);
                    echo 'Categoria ingresada correctamente';
                    echo '<br>';
                    echo '<a href="../vistas/listado_categorias.php"><button class="btn btn-primary w-25"><i class="fa-solid fa-arrow-left"></i>
                    Formulario</button></a>';

                }

                break;
            case 'actualizar':
                $nombre = limpiar_dato($_POST['nombre']);
                $tasa_iva = limpiar_dato($_POST['tasa_iva']);
                
                if(isset($_POST['activo']) == '1'){
                    $activo = "1";
                    echo 'Hola';
                }elseif(isset($_POST['activo'])== '0'){
                    $activo = '0';
                    echo 'adios';
                }
               
                if (empty($nombre) || empty($tasa_iva)) {
                    echo 'Todos los campos son obligatorios';
                    echo '<br>';
                    echo '<a href="../vistas/fm_actualizar_categorias.php?id='.$id.'"><button class="btn btn-primary w-25"><i class="fa-solid fa-arrow-left"></i>
                    Formulario</button></a>';
                }else{
                    actualizar_categorias($id, $nombre, $tasa_iva, $activo);
                    header("Location: ../vista/listado_categorias.php");
                    echo 'Categoria actualizada correctamente!';
                }
                break;
            case 'eliminar':

                $nombre = limpiar_dato($_POST['nombre']);

                if (empty($nombre)) {
                    echo 'El campo ID es obligatorio';
                    echo '<br>';
                    echo '<a href="../vista/formulario_altas.php"><button class="btn btn-primary w-25"><i class="fa-solid fa-arrow-left"></i>
                    Formulario</button></a>';
                } else {
                    eliminar_categoria($id);
                    echo 'Categoría eliminada correctamente';
                }
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

                                header("Location: ../vista/fm_eliminar_categorias.php?id=$id");
                                break;
                            case 'modificarid':
                                // Redirigir a la página de modificar con el ID correspondiente
                                header("Location: ../vista/fm_actualizar_categorias.php?id=$id");
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
