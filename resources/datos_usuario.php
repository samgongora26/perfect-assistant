<?php
    //echo "<p> Hola desde plantilla header </p>";
    //La fecha tiene un dia de más, asi que se le resta 1
    //$dia = date('d')-1;
    //Hoy es el dia/mes/año  $dia.'/'.
    $hoy = date('d/m/Y'); 
    //consulta para obtener el usuario
    $result = mysqli_query($link, "SELECT * FROM `usuarios` where id_usuario = 1");
    $row=mysqli_fetch_array($result);
    $nombre = $row["nombres"];
    $apellido_p = $row["apellido_pat"];
    $apellido_m = $row["apellido_mat"];

?>