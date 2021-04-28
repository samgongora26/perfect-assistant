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
                            <div class="col-md-8" >
                                <div class="overview-wrap">
                                    <h2 class="title-1">Pase de lista de la fecha 01/01/2020</h2>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Ver </label>
                                    </div>
                                    <div class="col-md-7">
                                                <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                                    <select class="js-select2" name="property">
                                                        <option selected="selected">Todos</option>
                                                        <option value="">Por puestos</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                    </div>
                                      
                                </div>
                            </div>
                        </div>

                        <!----------VER TODOS---------------->
                        <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <h4>Todos</h4>
                                        <div class="row m-t-20">
                                            <div class="col-md-12">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Puesto</th>
                                                                <th>Asitió </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>   
                                                                <td>John Doe</td>
                                                                <td>Monitorista</td>    
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                                            <select class="js-select2" name="property">
                                                                                <option selected="selected">Sí</option>
                                                                                <option value="">No</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                        </div>
                                                                    </div>
                                                                        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE-->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span>Notas de la asistencia</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <textarea name="textarea-input" id="textarea-input" style="min-width: 100%" rows="3"></textarea>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button class="btn btn-success">Guardar asistencias</button>
                                                    </div>
                                                </div>

                                            </div>       
                                        </div>
                                    </div>
                        </div>
                        <!-----/----VER TODOS--------------->
                        <!----------VER POR PUESTOS----------->
                        <div class="row m-t-20">
                            <!--Columna izquierda-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Puesto 1</h4>
                                        <div class="row m-t-20">
                                            <div class="col-md-12">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Puesto</th>
                                                                <th>Asitió </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>   
                                                                <td>John Doe</td>
                                                                <td>Monitorista</td>    
                                                                <td>
                                                                    <div class="table-data-feature">
                                                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                                            <select class="js-select2" name="property">
                                                                                <option selected="selected">Sí</option>
                                                                                <option value="">No</option>
                                                                            </select>
                                                                            <div class="dropDownSelect2"></div>
                                                                        </div>
                                                                    </div>
                                                                        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE-->
                                            </div>       
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Puesto 2</h4>
                                        <div class="row m-t-20">
                                            <div class="col-md-12">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Puesto</th>
                                                                <th>Asitió </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>   
                                                                <td>John Doe</td>
                                                                <td>Monitorista</td>    
                                                                <td>    
                                                                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                                        <select class="js-select2" name="property">
                                                                            <option selected="selected">Sí</option>
                                                                            <option value="">No</option>
                                                                        </select>
                                                                        <div class="dropDownSelect2"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE-->
                                            </div>       
                                        </div>
                                    </div>
                                </div>             
                            </div>
                            <!--COLUMNA DE LA DERECHAZA-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Puesto 3</h4>
                                        <div class="row m-t-20">
                                            <div class="col-md-12">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Puesto</th>
                                                                <th>Asitió </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>   
                                                                <td>John Doe</td>
                                                                <td>Monitorista</td>    
                                                                <td>
                                                                    <div class="rs-select2--dark rs-select2--sm  rs-select2--border">
                                                                        <select class="js-select2" name="property">
                                                                            <option selected="selected">Sí</option>
                                                                            <option value="">No</option>
                                                                        </select>
                                                                        <div class="dropDownSelect2"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE-->
                                            </div>       
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Puesto 4    </h4>
                                        <div class="row m-t-20">
                                            <div class="col-md-12">
                                                <!-- DATA TABLE-->
                                                <div class="table-responsive m-b-40">
                                                    <table class="table table-borderless table-data3">
                                                        <thead>
                                                            <tr>
                                                                <th>Nombre</th>
                                                                <th>Puesto</th>
                                                                <th>Asitió </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>   
                                                                <td>John Doe</td>
                                                                <td>Monitorista</td>    
                                                                <td>
                                                                    <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                                                        <select class="js-select2" name="property">
                                                                            <option selected="selected">Sí</option>
                                                                            <option value="">No</option>
                                                                        </select>
                                                                        <div class="dropDownSelect2"></div>
                                                                    </div>
                                                                        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- END DATA TABLE-->
                                            </div>       
                                        </div>
                                    </div>
                                </div>             
                            </div>

                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span>Notas de la asistencia</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <textarea name="textarea-input" id="textarea-input" style="min-width: 100%" rows="3"></textarea>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button class="btn btn-success">Guardar asistencias</button>
                                                    </div>
                                                </div>

                            </div>
                            <!--/TABLA DE DESCANSOS DE HOY-->
                        </div>
                        <!------/---VER POR PUESTOS----------->

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

</body>

</html>
<!-- end document-->
