<?php
    //La fecha tiene un dia de más, asi que se le resta 1
    $dia = date('d')-1;
    //Hoy es el dia/mes/año  $dia.'/'.
    $hoy = "$dia".date('/m/Y'); 
?>
