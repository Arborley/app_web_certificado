<?php
// Incluir el archivo de configuración
require_once __DIR__ . '../../../config.php';

// Incluir el modelo de contactos
require_once PRODUCTOS_MODEL_PATH . '/modelo_productos.php';
$action = $_GET['action'];

switch($action) {
    case'consultar':
    consulta();
    break;
}

