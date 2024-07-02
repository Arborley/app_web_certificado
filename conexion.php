<?php
function conectarBD() {
    $host = '127.0.0.1';
    $dbname = 'app_web_certi';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        } catch (PDOException $e) {
            die('Error en la conexión'. $e->getMessage());
        }
}