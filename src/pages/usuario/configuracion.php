<!DOCTYPE html>
<html lang="en">


<head>
    <!--MENU ASIDE IQUIERDA-->
    <?php
        include("../../templates/plantillas/plantilla_head.php");
    ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!--MENU ASIDE IQUIERDA-->
        <?php
            include("../../templates/plantillas/plantilla_menu.php");
        ?>
        <!-- / MENU-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
            <?php
                include("../../templates/plantillas/plantilla_header.php");
                
            ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap justify-content-center">
                                    <h2 class="title-1 ">Configuración de usuario</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row m-t-20 justify-content-center">
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="card">
                                        <div class="card-body">
                                            <div class="mx-auto d-block">
                                                <button class="mx-auto d-block" data-toggle="modal" data-target="#edit_foto">
                                                    <img class="rounded-circle"src="<?php echo $foto ?>" style="height: 100px; width: 100px;" alt="Card image cap">
                                                </button>
                                                <h5 class="text-sm-center mt-2 mb-1"><?php echo $nombre .' '. $apellido_p .' '. $apellido_m?></h5>
                                                <div class="location text-sm-center">
                                                    <i class="fa fa-user"></i> <?php echo $usr["usuario"]; ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-text text-sm-center">
                                                <i class="fa fa-envelope"></i> <?php echo $usr["correo"]; ?>
                                            </div>
                                            <div class="card-text text-sm-center">
                                                <i class="fa fa-phone"></i> <?php echo $usr["telefono"]; ?>
                                            </div>
                                            <div class="card-text text-sm-center">
                                                <i class="fa fa-birthday-cake"></i> <?php echo $usr["fecha_nac"]; ?>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <strong class="card-title mb-3">Perfil de usuario</strong>
                                            <button type="submit" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#edit">
                                                <i class="fa fa-edit"></i> Editar
                                            </button>
                                            <button type="submit" class="btn btn-warning btn-sm float-right mr-1" data-toggle="modal" data-target="#edit_pass">
                                                <i class="fa fa-key "></i> Cambiar contraseña
                                            </button>


                                        </div>
                                    </div>

                                </div>  
                            </div>    
                        </div>

                        <div class="row">
                            <?php
                                include("../../templates/plantillas/plantilla_footer.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!----------------MODAL DE CONFIGURACION----------------->
            <!-- MODAL DE EDICION DE USUARIO-->
			<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Editar el usuario</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<form id="edit_usr"  enctype="multipart/form-data" class="form-horizontal"> 
                                    <!--Nombress-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">usuario</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nombre" name="text-input" placeholder="<?php echo $usr["usuario"]; ?>" value="<?php echo $usr["usuario"]; ?>" class="form-control">
                                                    <!--small class="form-text text-muted">Nombres</small-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nombre(s)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nombre" name="text-input" placeholder="<?php echo $nombre ?>" value="<?php echo $nombre?>" class="form-control">
                                                    <!--small class="form-text text-muted">Nombres</small-->
                                                </div>
                                            </div>
                                            <!--Apellido P-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Primer apellido</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="apellido_pat" name="text-input" placeholder="<?php echo $apellido_p ?>"  value="<?php echo $apellido_p; ?>"class="form-control">
                                                    <small class="form-text text-muted">Apellido paterno</small>
                                                </div>
                                            </div>
                                            <!--Apellido M-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Segundo apellido</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="<?php echo $apellido_m; ?>" value="<?php echo $apellido_m; ?>" class="form-control">
                                                    <small class="form-text text-muted">Apellido materno</small>
                                                </div>
                                            </div>
                                            <!--FECHA DE NAC-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Fecha de nacimiento</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="<?php echo $usr["fecha_nac"]; ?>" value="<?php echo $usr["fecha_nac"]; ?>" class="form-control">
                                                    <small class="form-text text-muted">YYYY-MM-DD</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Correo</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="<?php echo $usr["correo"]; ?>" value="<?php echo $usr["correo"]; ?>" class="form-control">
                                                    <small class="form-text text-muted">Correo electronico</small>
                                                </div>
                                            </div>
                                            
                                </form>
							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary">Guardar</button>
						</div>
					</div>
				</div>
			</div>
            <!-- MODAL DE EDICION DE USUARIO-->
            <!-- MODAL DE EDICION DE CONTRASEÑA-->
			<div class="modal fade" id="edit_pass" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Cambiar contraseña</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                                        <form action="" method="post" class="">
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
                                                    <span class="help-block">Contraseña acutual</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
                                                    <span class="help-block">Nueva contraseña</span>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 ">
                                                    <input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
                                                    <span class="help-block">Confirma la nueva contraseña</span>
                                                </div>
                                            </div>
                                        </form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Canncelar</button>
							<button type="button" class="btn btn-primary">Confirmar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- MODAL DE EDICION DE CONTRASEÑA -->
            <!-- MODAL DE EDICION DE FOTO -->
			<div class="modal fade" id="edit_foto" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Cambiar fotografía</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                                        <form action="" method="post" class="mx-auto">
                                            <div class="row form-group mx-auto">
                                                <div class="col col-md-12">
                                                    <label for="file-input" class=" form-control-label">Fotografía</label>
                                                </div>  
                                                <div class="col-12 col-md-12 mx-auto">
                                                    <input type="file" id="file-input" value="<?php echo $usr["foto"]; ?>" name="file-input" class="form-control-file">
                                                </div>
                                            </div>
                                        </form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Canncelar</button>
							<button type="button" class="btn btn-primary">Confirmar</button>
						</div>
					</div>
				</div>
			</div>
			<!-- MODAL DE EDICION DE FOTO -->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../vendor/slick/slick.min.js">
    </script>
    <script src="../../vendor/wow/wow.min.js"></script>
    <script src="../../vendor/animsition/animsition.min.js"></script>
    <script src="../../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../js/main.js"></script>

</body>

</html>
<!-- end document-->
