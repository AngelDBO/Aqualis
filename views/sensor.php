<?php include './content/head.php'; ?>
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
                                    <li><a href="sensor.php">Registrar</a></li>
                                    <li><a href="mantenimiento.php">Mantenimiento</a></li>
                                    <li><a href="lectura.php">Lecturas</a></li>
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

                    <div class="col-xs-6 col-sm-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Registro de Sensores</strong>
                            </div>
                            <div class="card-body">
                                <!-- ============= | FORMULARIO PERSONA NATURAL | ================-->

                                <form id="F_Sensor" autocomplete="off">
                                    <br>
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="Usuario">Parametro asociado</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-flask" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <select id="Parametro_perteneciente" name="Parametro_perteneciente" class="form-control"></select>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="Nombre Mision">Rango Medicion</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tachometer" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="Rango" class="form-control" id="Nombre_Mision"  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="Correo">Estado sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-heartbeat" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <select id="Tipo_Medicion" name="Estado" class="form-control">
                                                    <option></option>
                                                    <option selected value="">--</option>
                                                    <option value="Activo">Activo</option>
                                                    <option value="Inactivo">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="control-label" for="Precision sensor">Precision sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tachometer" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input class="form-control" id="Precision" name="Precision" type="text"/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <button type="button" class="btn btn-success" id="bt-registrarSensor" onclick="Registrar_Sensor();">Guardar</button>
                            </div>
                        </div>

                        <!--LISTA DE SENSORES-->
                        <div class="card">
                            <div class="card-header">
                                <strong>Lista de Sensores</strong>
                            </div>
                            <div class="card-body">
                                <div id="tabla_sensor"></div>
                            </div>
                        </div>

                    </div>


                    <!-- Modal Persona Natural-->

                    <div class="modal fade" id="Sensor_Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modificar Sensor</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="Actualizar_Sensor">
                                        <input type="text" id="IDu" name="ID">

                                        <div class="form-group">
                                            <label class="control-label" for="Nombre Mision">Rango Medicion</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tachometer" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="RangoU" class="form-control" id="RangoU"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="Precision sensor">Precision sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tachometer" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input class="form-control" id="PrecisionU" name="Precision" type="text"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="Correo">Estado sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-heartbeat" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <select id="Tipo_MedicionU" name="Estado" class="form-control">
                                                    <option></option>
                                                    <option selected value=""></option>
                                                    <option value="Activo">Activo</option>
                                                    <option value="Inactivo">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary" id="btn-updatePN" onclick="Actualizar_Sensor();" data-dismiss="modal">Actualizar</button>
                                </div>
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
    <script src="../ajax/Sensor.js"></script>
    <script>
                                        init();
    </script>
</body>
</html>
