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
                        <!--TITULO DE BIENVENIDO -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Agregar empleados</h2>
                                </div>
                            </div>
                        </div>
                        <!---CONTENIDO--->
                        <div class="row m-t-30 justify-content-center">
                            <!--FORMULARIO DE REGISTRO-->
                            <div class="col-lg-11 col-md-10 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Formulario </strong> de registro
                                    </div>
                                    <div class="card-body card-block">
                                        <!--Formulario-->
                                        <form id="agr_empleado"  enctype="multipart/form-data" class="form-horizontal">
                                            <!--Nombress-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nombre(s)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nombre" name="text-input" placeholder="John" class="form-control">
                                                    <!--small class="form-text text-muted">Nombres</small-->
                                                </div>
                                            </div>
                                            <!--Apellido P-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Primer apellido</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="apellido_pat" name="text-input" placeholder="Doe" class="form-control">
                                                    <small class="form-text text-muted">Apellido paterno</small>
                                                </div>
                                            </div>
                                            <!--Apellido M-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Segundo apellido</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="Doe" class="form-control">
                                                    <small class="form-text text-muted">Apellido materno</small>
                                                </div>
                                            </div>
                                            <!--FECHA DE NAC-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Fecha de nacimiento</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="01/01/2000" class="form-control">
                                                    <small class="form-text text-muted">Fecha de nacimiento</small>
                                                </div>
                                            </div>
                                            <!--puesto-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Puesto</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                    <small class="form-text text-muted">Puesto</small>
                                                </div>
                                            </div>
                                            <!--Horario-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Horario</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                    <small class="form-text text-muted">Horario</small>
                                                </div>
                                            </div>
                                            <!--NUMERO-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Número telefonico</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="text-input" placeholder="999-999-9999" class="form-control">
                                                    <small class="form-text text-muted">Número telefonico</small>
                                                </div>
                                            </div>
                                            <!--Correo-->
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="exampleInputEmail2" class="form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="exampleInputEmail" placeholder="jane.doe@example.com" required="" class="form-control">
                                                    <small class="form-text text-muted">Correo electronico  </small>
                                                </div>
                                            </div>
                                        </form>
                                        <!--/Formulario-->
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" onclick="metodo()" class="btn btn-success btn-sm float-right">
                                            <i class="fa fa-check"></i> Guardar
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <?php
                                include("../../template/plantillas/plantilla_footer.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <script src="app.js"></script>
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
