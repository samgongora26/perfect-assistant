
<?php
	include("../../resources/db.php");
    $link = Conectarse(); /*conexion a la bd*/
    //echo "<p> Hola desde plantilla header </p>";
    //La fecha tiene un dia de más, asi que se le resta 1
    $dia = date('d')-1;
    //Hoy es el dia/mes/año
    $hoy = $dia.'/'.date('m/Y'); 
    //consulta para obtener el usuario
   
    $result = mysqli_query($link, "SELECT * FROM `usuarios` where id_usuario = 1");
    $row=mysqli_fetch_array($result);
    $nombre = $row["nombres"];
    $apellido_p = $row["apellido_pat"];
    $apellido_m = $row["apellido_mat"];
    
?>

<header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <!--BARRA DE BUSQUEDA DE EMPLEADOS-->
                            <!--Implementaciones futuras-->
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Búqueda rápida de empleados" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            
                            <div class="header-button">
                                <div class="noti-wrap mr-4">
                                    <small class="mr-10"><?php echo $hoy; ?></small>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../../images/icon/avatar-06.jpg" alt="profile img" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $nombre .' '. $apellido_p.' '. $apellido_m;?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../../images/icon/avatar-06.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $nombre .' '. $apellido_p.' '. $apellido_m;?></a>
                                                    </h5>
                                                    <span class="email">amesarit@email.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="../usuario/configuracion.php">
                                                        <i class="zmdi zmdi-account"></i>Cuenta</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Salir</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>