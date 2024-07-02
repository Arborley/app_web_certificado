<?php
require_once "../config.php";
require_once MODEL_PATH ."modelo_funcion.php";

$action = $_GET['action'];

switch($action) {
    case'consultar':
    consulta();
    break;
}