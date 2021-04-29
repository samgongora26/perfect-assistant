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
                        <div class="row">
                            <div class="col-md-8" >
                                <div class="overview-wrap">
                                    <h2 class="title-1">Críticos</h2>
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
                                                        <option value="">Puesto 1</option>
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                    </div>
                                      
                                </div>
                            </div>
                        </div>

                        <!----------TABLA DE PERSONAS EN NUMEROS CRITICOS---------------->
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
                                                                <th>Faltas</th>
                                                                <th>Retardos</th>
                                                                <th>Acciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>   
                                                                <td>John Doe</td>
                                                                <td>monitorista</td>    
                                                                <td class="denied">1</td>
                                                                <td class="denied">2</td>
                                                                <td>
                                                                    <button class="btn btn-danger btn-md">Ver</button> 
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
                        <!-----/----TABLA DE PERSONAS EN NUMEROS CRITICOS--------------->
                        

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
