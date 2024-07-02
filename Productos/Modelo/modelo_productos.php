<?php
require_once "../config.php";

// Creamos la funcion limpiar_dato
function limpiar_datos($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

// Funcion para consultar el producto
function consultar_productos($id) {
    $pdo = conectarBD();
    $stmt = $pdo->query("SELECT p.id_producto, p.nombre AS producto, p.descripcion, p.precio, p.impuesto, c.nombre AS categoria, c.tasa_iva FROM productos p JOIN categorias c ON p.id_categoria=c.id_categoria WHERE id_producto = $id AND p.activo = 1 AND c.activo = 1 ");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// 
function consulta() {
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // Validar y limpiar datos
        $id=limpiar_datos($_POST['id']);
        // Validación básica
        if(empty($id)) {
            echo'Todos los campos son obligatorios';
        } else {
            $productos = consultar_productos($id);
            require VIEW_PATH . "../vistas/pantalla_consultar.php";
        }
    }
}