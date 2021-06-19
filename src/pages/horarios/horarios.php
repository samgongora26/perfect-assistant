<?php 
    //Se hace llamado a la sesion
    include("../../../inc/admin/sesion.php");
?>
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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Horarios</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row m-t-30">
                            <div class="col-lg-5">
                            <form id="form_agregar_horario" class="card">
                                    <div class="card-header">
                                        <strong>Formulario </strong> de registro
                                    </div>
                                    <div class="card-body card-block">
                                        <!--Formulario-->
                                        <div class="form-horizontal">
                                            <!--Nombre del puesto-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nombre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nombre_horario" name="nombre_horario" placeholder="primer turno" class="form-control">
                                                    <!--small class="form-text text-muted">Nombres</small-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Hora inicio (formato 24 horas)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" id="hora_inicio" name="nombre_horario" placeholder="7:00" class="form-control">
                                                    <!--small class="form-text text-muted">Nombres</small-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Hora fin (formato 24 horas)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" id="hora_fin" name="nombre_horario" placeholder="13:00" class="form-control">
                                                    <!--small class="form-text text-muted">Nombres</small-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--/Formulario-->
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success btn-sm float-right">
                                            <i class="fa fa-check"></i> Guardar
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-lg-7">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Hora inicio</th>
                                                <th>Hora fin</th>
                                                <th>operaciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="contenido_horario">
                                            <div id="mensaje"></div>
                                            <!--AQUI ES GUARDADO EL CONTENIDO DE LOS HORARIOS-->
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->

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
    <script src="../../../inc/funciones/horarios/app.js"></script>
</body>

</html>
<!-- end document-->
