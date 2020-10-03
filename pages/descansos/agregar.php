<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dashboard">
    <meta name="author" content="Saul Gongora">

    <!-- Title Page-->
    <title>Perfect assistant</title>

    <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!--MENU ASIDE IQUIERDA-->
        <?php
            include("../plantillas/plantilla_menu.php");
        ?>
        <!-- / MENU-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
            <?php
                include("../plantillas/plantilla_header.php")
            ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8" >
                                <div class="overview-wrap">
                                    <h2 class="title-1">Descansos de hoy</h2>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Puestos </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select name="select" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            <option value="1">Option #1</option>
                                            <option value="2">Option #2</option>
                                            <option value="3">Option #3</option>            
                                        </select>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        
                        <div class="row m-t-20">
                            <!--Columna izquierda-->
                            <!--TABLA DE EMPLEADOS PARA AGREGAR-->
                            <div class="col-md-6">
                                <h4>Agregar descansos</h4>
                                <div class="row m-t-20">
                                        <div class="col-md-12">
                                            <!-- DATA TABLE-->
                                            <div class="table-responsive m-b-40">
                                                <table class="table table-borderless table-data3">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Puesto</th>
                                                            <th>Descansa </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>   
                                                            <td>John Doe</td>
                                                            <td>Monitorista</td>    
                                                            <td>
                                                                <div class="table-data-feature">
                                                                    <select name="select" id="select" class="form-control">
                                                                        <option value="0">NO</option>
                                                                        <option value="1">Hoy</option>
                                                                        <option value="2">Mañana</option>
                                                                        <option value="3">Pasado</option>            
                                                                    </select>
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
                            <!--/TABLA DE EMPLEADOS PARA AGREGAR-->
                            <!--TABLA DE DESCANSOS DE HOY-->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Descansos de hoy</h4>
                                        <div class="row m-t-20">
                                                <div class="col-md-12">
                                                    <!-- DATA TABLE-->
                                                    <div class="table-responsive m-b-40">
                                                        <table class="table table-borderless table-data3">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Puesto</th>
                                                                    <th>Fecha</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>   
                                                                    <td>John Doe</td>
                                                                    <td>Monitorista</td>    
                                                                    <td>01/01/2020</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- END DATA TABLE-->
                                                </div>        
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h4>Descansos de Mañana</h4>
                                        <div class="row m-t-20">
                                                <div class="col-md-12">
                                                    <!-- DATA TABLE-->
                                                    <div class="table-responsive m-b-40">
                                                        <table class="table table-borderless table-data3">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Puesto</th>
                                                                    <th>Fecha</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>   
                                                                    <td>John Doe</td>
                                                                    <td>Monitorista</td>    
                                                                    <td>01/01/2020</td>
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
                            <!--/TABLA DE DESCANSOS DE HOY-->
                        </div>

                        <div class="row">
                            <?php
                                include("../plantillas/plantilla_footer.php");
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
