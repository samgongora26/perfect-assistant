<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    //--------------USUARIOS--------------
    case "mostrar":
        $resultado = mostrar_usuarios();
        break;
    case "actualizar_usuario":
        $resultado = actualizar_usuario();
        break;

    case "actualizar_contrasenia":
        $resultado = actualizar_contrasenia();
        break;
    
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide