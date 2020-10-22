<?php
function Conectarse(){
	if (!($link=mysqli_connect("localhost","root","roottoor"))){
		echo "Error conectando a la base de datos.";
		exit();
	}
	if(!mysqli_select_db($link,"PA")){
		echo "Error seleccionando la base de datos.";
		exit();
	}
    return $link;
}
//echo "<p> Hola desde db</p>";
?>

