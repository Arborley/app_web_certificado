<?php
// Define la ruta raíz de la aplicación
define('ROOT_PATH', realpath(dirname(__FILE__)));

// Define la ruta base de la aplicación
define('BASE_PATH', realpath(dirname(__FILE__)));

// Define las rutas a los módulos
define('FACTURAS_PATH', BASE_PATH . '/facturacion');
define('CLIENTES_PATH', BASE_PATH . '/clientes');
define('PRODUCTOS_PATH', BASE_PATH . '/productos');

// Define las rutas a los modelos, vistas y controladores de cada módulo
define('FACTURAS_MODEL_PATH', FACTURAS_PATH . '/modelo');
define('FACTURAS_VIEW_PATH', FACTURAS_PATH . '/vista');
define('FACTURAS_CONTROLLER_PATH', FACTURAS_PATH . '/controlador');

define('CLIENTES_MODEL_PATH', CLIENTES_PATH . '/modelo');
define('CLIENTES_VIEW_PATH', CLIENTES_PATH . '/vista');
define('CLIENTES_CONTROLLER_PATH', CLIENTES_PATH . '/controlador');

define('PRODUCTOS_MODEL_PATH', PRODUCTOS_PATH . '/modelo');
define('PRODUCTOS_VIEW_PATH', PRODUCTOS_PATH . '/vista');
define('PRODUCTOS_CONTROLLER_PATH', PRODUCTOS_PATH . '/controlador');
// Incluir archivo de conexión a la base de datos
require_once __DIR__ . '/conexion.php';
?>
