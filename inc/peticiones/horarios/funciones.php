<?php
$accion = $_POST['accion'];
require 'consultas.php';

switch ($accion) {
    //--------------USUARIOS--------------
    case "ver_horarios":
        $resultado = ver_horarios();
        break;
    case "guardar_horario":
        $resultado = guardar_horario();
        break;

    case "actualizar_contrasenia":
        $resultado = actualizar_contrasenia();
        break;
    
}

echo json_encode(($resultado));// envio el retorno del array a donde se me pide