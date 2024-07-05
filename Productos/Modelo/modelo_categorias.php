<?php

//Función para obtener los datos por el id
function obtener_categorias_por_id($id){
    $pdo = conectarBD();
    $stmt = $pdo->prepare("SELECT * FROM categorias WHERE id_categoria = :id ");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
//Función para insertar en la tabla categorias
function insertar_categorias($nombre, $tasa_iva ){
    $pdo = conectarBD();
    $stmt = $pdo->query("INSERT INTO productos (nombre, tasa_iva, activo) VALUES ('$nombre', '$tasa_iva', 1)");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//Función para "eliminar" la categoria recibiendo la id de la categoria.
function eliminar_categoria($id){
    $pdo = conectarBD();
    $stmt = $pdo->query("UPDATE categorias set activo = 0 where id_categoria = '$id'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//Función para actualizar las categorias recibiendo los datos del formulario por parámetro y guardandolos en la base de datos.
function actualizar_categorias($id, $nombre, $tasa_iva, $activo){
    $pdo = conectarBD();
    $stmt = $pdo->query("UPDATE categorias set nombre = '$nombre', tasa_iva = '$tasa_iva', activo = '$activo' where id_categoria = '$id'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//Función para recoger todos las categorias de la base de datos
function recoger_categorias() {
    $pdo = conectarBD();
    $stmt = $pdo->query('SELECT * FROM categorias');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//Función para hacer el listado de los productos cogiendo la vista del archivo listar_productos.php
function listar_categorias() {
    $categorias = recoger_categorias();
    require PRODUCTOS_VIEW_PATH . '/listar_categorias.php';
}

// Funcion para consultar las categorias
function consultar_categorias($id) {
    $pdo = conectarBD();
    $stmt = $pdo->query("SELECT id_categoria, nombre, tasa_iva FROM categorias WHERE id_categoria = $id AND activo = 1 ");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Funcion para realizar la consulta
function consultar() {
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // Validar y limpiar datos
        $id=limpiar_dato($_POST['id_categoria']);
        // Validación básica
        if(empty($id)) {
            echo'Todos los campos son obligatorios';
        } else {
            $productos = consultar_categorias($id);
            require PRODUCTOS_PATH . "../vista/pantalla_consultar_categorias.php";
        }
    }
}
?>