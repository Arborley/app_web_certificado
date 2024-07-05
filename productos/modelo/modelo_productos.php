<?php
require_once "../../conexion.php";

//Función para obtener los datos por el id
function obtener_productos_por_id($id){
    $pdo = conectarBD();
    $stmt = $pdo->prepare("SELECT * FROM productos WHERE id_producto = :id ");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
//Función para insertar en la tabla productos
function insertar_productos($nombre, $categoria, $precio,$descripcion,$impuesto ){
    $pdo = conectarBD();
    $stmt = $pdo->query("INSERT INTO productos (nombre, id_categoria, precio, descripcion, impuesto, activo) VALUES ('$nombre', '$categoria', '$precio', '$descripcion', '$impuesto',1)");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

//Función para "eliminar" el producto recibiendo el id del producto.
function eliminar_producto($id){
    $pdo = conectarBD();
    $stmt = $pdo->query("UPDATE productos set activo = 0 where id_producto = '$id'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//Función para actualizar los productos recibiendo los datos del formulario por parámetro y guardandolos en la base de datos.
function actualizar_producto($id, $nombre, $descripcion, $precio, $impuesto, $id_categoria){
    $pdo = conectarBD();
    $stmt = $pdo->query("UPDATE productos set nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', impuesto = '$impuesto', id_categoria = '$id_categoria' where id_producto = '$id'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//Función para limpiar el dato obtenido en el formulario
function limpiar_dato($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Función para recoger todos los productos de la base de datos
function recoger_productos() {
    $pdo = conectarBD();
    $stmt = $pdo->query('SELECT * FROM productos');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
//Función para hacer el listado de los productos cogiendo la vista del archivo listar_productos.php
function listar_productos() {
    $productos = recoger_productos();
    require PRODUCTOS_VIEW_PATH . '/listar_productos.php';
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
        $id=limpiar_dato($_POST['id']);
        // Validación básica
        if(empty($id)) {
            echo'Todos los campos son obligatorios';
        } else {
            $productos = consultar_productos($id);
            require PRODUCTOS_PATH . "../vista/pantalla_consultar.php";
        }
    }
}
?>