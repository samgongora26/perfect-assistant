<?php   //-------CONEXIÓN A LA BASE DE DATOS
    include 'db.php';
    $result = mysqli_query($conexion, "SELECT * FROM `usuarios` WHERE `id_usuario` = '$id_user'");
    $total = mysqli_num_rows($result);                                      
    $usr=mysqli_fetch_array($result);    
    //Ejemplos de como usar los datos:
    //echo $usr["nombres"];
    //echo $usr["apellidos"];
    //echo $usr["usuario"];
    //echo $usr["fotografia"]
    //echo $usr["estado"]
    $nombre = $usr["nombres"];
    //La fecha tiene un dia de más, asi que se le resta 1
    //$dia = date('d')-1;
    //Hoy es el dia/mes/año  $dia.'/'.
    $hoy = date('d/m/Y'); 

    //si la foto está vacia carga esta por defecto
    if($foto == ""){
        $foto = "../../images/icon/avatar-05.jpg";
    }

    mysqli_close($conexion);
?>