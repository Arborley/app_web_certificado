<?php
require_once __DIR__ . '/../config.php';



//Función para recoger todos los productos de la base de datos

function recoger_productos() {
    $pdo = conectarBD();
    $stmt = $pdo->query('SELECT * FROM productos WHERE activo = 1');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function listar_productos() {
    $productos = recoger_productos();
    require VIEW_PATH . '../vista/listar_productos.php';
}
?>
