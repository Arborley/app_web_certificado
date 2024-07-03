<?php
require_once __DIR__ . '/../config.php';

function obtener_productos($nombre, $categoria, $precio, $descripcion)
{

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];


    $pdo = conectarBD('app_web_certi');

    $stmt = $pdo->query("INSERT INTO productos (nombre, categoria, precio, descripcion, activo) VALUES ('$nombre', '$categoria', '$precio', '$descripcion',1)");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

?>
/*function obtener_productos($nombre,$categoria,$precio,$descripcion,$activo){

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$activo = $_POST['activo'];

$pdo = conectarBD('app_web_certi');
$stmt = $pdo->query ("insert into productos (id, nombre, categoria, precio,categoria) values ("$nombre","$categoria","$precio","$descripcion",1));
}*/