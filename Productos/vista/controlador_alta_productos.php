<?php

function limpiar_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpiar y validar los datos
    $nombre = limpiar_input($_POST["nombre"]);
    $precio = limpiar_input($_POST["precio"]);
    $descripcion = limpiar_input($_POST["descripcion"]);
    $categoria = limpiar_input($_POST["categoria"]);
}

// Validación básica
if (empty($nombre) || empty($categoria) || empty($precio) || empty($descripcion)) {
    echo "Todos los campos son obligatorios.";
} else {
    echo "Producto insertado correctamente.";
}
