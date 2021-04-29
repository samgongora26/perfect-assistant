<?php

function mostrar_usuarios(): array
{
    try {
        require '../../admin/db.php';

        $sql = "SELECT * FROM `usuarios` WHERE `id_usuario` = 1;";
        $consulta = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_assoc($consulta);

        $respuesta = array( //usar cuando se espera varios resultadosS
            'id_usuario' => $row['id_usuario'],
            'nombres' => $row['nombres'],
            'telefono' => $row['telefono'],
            'correo' => $row['correo'],
            'usuario' => $row['usuario'],
            'foto' => $row['foto']
        );
        //var_dump($usuarios);
        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

function actualizar_usuario(): array
{
    try {
        require '../../admin/db.php';
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $telefono = $_POST['telefono'];
        $correo =  $_POST['correo'];
        $usuario = $_POST['usuario'];
        
        $sql = "UPDATE `usuarios` SET `nombres`= '$nombres',`telefono`=  '$telefono',`correo`= '$correo',`usuario`= '$usuario' WHERE `usuarios`.`id_usuario` = $id;";
        $consulta = mysqli_query($conexion, $sql);

        $respuesta = array(
            'respuesta' => 'correcto',
            'id' => $id
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}

