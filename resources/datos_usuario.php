<?php
    //consulta para obtener el usuario
    $result = mysqli_query($link, "SELECT * FROM `usuarios` where id_usuario = 1");
    $usr=mysqli_fetch_array($result);
    //ESTOS SON LOS DATOS DEL USUARIO
    $nombre = $usr["nombres"];
    $apellido_p = $usr["apellido_pat"];
    $apellido_m = $usr["apellido_mat"];
    $foto = $usr["foto"];

    //si la foto está vacia carga esta por defecto
    if($foto == ""){
        $foto = "../../images/icon/avatar-05.jpg";
    }
?>