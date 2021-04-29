
<?php
	
    include("../../../inc/admin/datos_usuario.php"); //Para obtneer el nombre del usuario
    //include("../../../inc/admin/date.php"); //para obtener la fecha
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
                                            <img src="../../images/icon/<?php echo $usr["foto"]; ?>" style="height: 50px; width: 50px;" alt="profile img" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="../usuario/configuracion.php"><?php echo $usr["usuario"];?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="../usuario/configuracion.php">
                                                        <img src="../../images/icon/<?php echo $usr["foto"]; ?>"style="height: 50px; width: 50px;"  alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="../usuario/configuracion.php"><?php echo $nombre;?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $usr["correo"]; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="../usuario/configuracion.php">
                                                        <i class="zmdi zmdi-account"></i>Cuenta</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../../../inc/admin/logout.php">
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