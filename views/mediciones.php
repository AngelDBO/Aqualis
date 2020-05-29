<?php
include './content/head.php';
session_start();
if (isset($_SESSION["user"])) {
    ?>
    <body>
        <!-- Left Panel -->
        <?php include './content/sidebar.php'; ?>
        <!-- Left Panel -->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"></a>
                        <a class="navbar-brand hidden" href="./"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <?php require_once './content/menu.php' ?>
                </div>
            </header><!-- /header -->
            <!-- Header-->
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Gestion Sensor</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="mision.php"><span class="badge badge-pill badge-primary">Registrar mision</span></a></li>
                                        <li><a href="mediciones.php"><span class="badge badge-pill badge-danger">Registrar mediciones</span></a></li>
                                        <li><a href="historial.php"><span class="badge badge-pill badge-success">Historial de mediciones</span></a></li>
                                        <li><a href="lectura.php"><span class="badge badge-pill badge-warning">Lectura sensor</span></a></li>
                                        <!--                                    <li class="active">Advanced</li>-->
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4">
                            <!--LISTA DE SENSORES-->
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #18A8B4;" >
                                    <strong>Registrar mediciones</strong>
                                </div>
                                <div class="card-body">
                                    <form id="F_mediciones" autocomplete="off">
                                        <div class="form-group">
                                            <input type="text" name="IDu" id="id_mision" readonly hidden="">
                                            <label for="Usuario">Codigo mision</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-hashtag" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input type="text"  class="form-control" id="codigoM"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="Nombre Mision">Tiempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-tachometer" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="range" min="1" max="20" name="Rango" class="form-control" id="get" onchange="fetch()">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="Nombre Mision">Minutos</label>
                                                <div class="input-group">
                                                    <input type="text" id="put" name="Rango" class="form-control"   readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="Correo">Resultado mision</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-heartbeat" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <select id="Tipo_Medicion" name="Estado" class="form-control">
                                                    <option></option>
                                                    <option selected value="">--</option>
                                                    <option value="Activo">Exitosa</option>
                                                    <option value="Inactivo">Anulada</option>
                                                    <option value="Inactivo"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                    </form>
                                    <button type="button" class="btn btn-info" id="bt-registrarSensor" onclick="Registrar_Sensor();">Iniciar</button>
                                    <button type="button" class="btn btn-danger float-right" id="bt-registrarSensor" onclick="Registrar_Sensor();">Finalizar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #18A8B4;" >
                                    <strong>Lista de mediciones</strong>
                                </div>
                                <div class="card-body">
                                    <div id="tabla_sensor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
            <div class="clearfix"></div>
            <footer class="site-footer">
                <div class="footer-inner ">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; <?php echo date('Y'); ?> Aqualis
                        </div>
                        <!-- <div class="col-sm-6 text-right">
                             Designed by <a href="https://colorlib.com">Colorlib</a>
                         </div> -->
                    </div>
                </div>
            </footer>
        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="../assets/js/main.js"></script>
        <script src="../assets/jquery-3.2.1.js"></script>
        <script src="../assets/sweetalert.js"></script>
        <script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>
        <script src="../ajax/Mediciones.js"></script>
        <script src="../ajax/Sensor.js"></script>
        <script>
                                        init();

        </script>
        <script>
            initID();
        </script>
        <script>
            function fetch()
            {
                var get = document.getElementById("get").value;
                document.getElementById("put").value = get;
            }
        </script>
    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>