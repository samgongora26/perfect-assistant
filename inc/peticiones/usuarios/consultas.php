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
        
        $sql = "UPDATE `usuarios` SET `nombres`= '$nombres',`telefono`=  $telefono,`correo`= '$correo',`usuario`= '$usuario' WHERE `usuarios`.`id_usuario` = $id;";
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

function actualizar_contrasenia(): array
{
    try {
        require '../../admin/db.php';
        $contrasenia_actual = $_POST['contrasenia_actual']; //la contrasenia actual 
        $nueva_contasenia = $_POST['nueva_contasenia']; //nueva contrasenia 
        $mensaje = "";

        $sql = "SELECT * FROM `usuarios` WHERE `id_usuario` = 1;";
        $consulta = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_assoc($consulta);

        $contrasenia_vieja = $row["contrasenia"]; //contrasenia que esta en la bd

        if ($contrasenia_actual == $contrasenia_vieja){
            $sql = "UPDATE `usuarios` SET `contrasenia`= '$nueva_contasenia' WHERE `usuarios`.`id_usuario` = 1;";
            $consulta = mysqli_query($conexion, $sql);
            $mensaje = "correcto";
        }

        $respuesta = array(
            'respuesta' => $mensaje,
            'contrasenia actual form' => $contrasenia_actual,
            'contrasenia bd' => $contrasenia_vieja
        );

        return $respuesta;
    } catch (\Throwable $th) {
        var_dump($th);
    }
    mysqli_close($conexion);
}
