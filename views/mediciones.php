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
                        <a class="navbar-brand" href="./"><img src="./../images/logo.png" alt="Logo"></a>
                        <a class="navbar-brand hidden" href="./"><img src="./../images/logo2.png" alt="Logo"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">


                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="./../images/admin.jpg" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                            </div>
                        </div>
                    </div>
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
                                        <li><a href="mision.php"><span class="badge badge-primary">Registrar mision</span></a></li>
                                        <li><a href="mediciones.php"><span class="badge badge-danger">Registrar mediciones</span></a></li>
                                        <li><a href="historial.php"><span class="badge badge-success">Historial de mediciones</span></a></li>
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
                                <div class="card-header">
                                    <strong>Registrar mediciones</strong>
                                </div>
                                <div class="card-body">
                                    <form id="F_mediciones" autocomplete="off">
                                        <div class="form-group">
                                        <input type="text" id="codigoM" readonly>
                                            <label for="Usuario">Codigo mision</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-hashtag" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="Codigo mision" class="form-control" id="id_mision"  readonly>
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
                                    <button type="button" class="btn btn-primary" id="bt-registrarSensor" onclick="Registrar_Sensor();">Iniciar</button>

                                    <button type="button" class="btn btn-success float-right" id="bt-registrarSensor" onclick="Registrar_Sensor();">Finalizar</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-8 col-sm-8">


                            <!--LISTA DE SENSORES-->
                            <div class="card">
                                <div class="card-header">
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
                        <div class="col-sm-6 text-right">
                            Designed by <a href="https://colorlib.com">Colorlib</a>
                        </div>
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