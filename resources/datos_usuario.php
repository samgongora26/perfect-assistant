<?php
    //echo "<p> Hola desde plantilla header </p>";
    //La fecha tiene un dia de más, asi que se le resta 1
    //$dia = date('d')-1;
    //Hoy es el dia/mes/año  $dia.'/'.
    $hoy = date('d/m/Y'); 
    //consulta para obtener el usuario
    $result = mysqli_query($link, "SELECT * FROM `usuarios` where id_usuario = 1");
    $usr=mysqli_fetch_array($result);
    $nombre = $usr["nombres"];
    $apellido_p = $usr["apellido_pat"];
    $apellido_m = $usr["apellido_mat"];

?>