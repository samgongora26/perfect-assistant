
<?php
	include("../../resources/db.php");
    $link = Conectarse(); /*conexion a la bd*/
    //echo "<p> Hola desde plantilla header </p>";
    
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
                                    <small class="mr-10">01/01/2020</small>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../../images/icon/avatar-06.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Amesarit Pacheco</a>
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
                                                        <a href="#">Amesarit pacheco</a>
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