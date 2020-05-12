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
                                <h1><spam >Gestion sensor</spam></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="sensor.php"><span class="badge badge-pill badge-primary">Registrar</span></a></li>
                                    <li><a href="mantenimiento.php"><span class="badge badge-pill badge-danger">Mantenimiento</span></a></li>

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
                            <div class="card-header text-white" style="background-color: #18A8B4;" >
                                <strong>Registro de Sensores</strong>
                            </div>
                            <div class="card-body">
                                <!-- ============= | FORMULARIO SENSOR | ================-->

                                <form id="F_Sensor" autocomplete="off">
                                    <br>
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="Usuario">Parametro asociado</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-flask" style="color: #40e0d0" aria-hidden="true"></i>
                                                </div>
                                                <select id="Parametro_perteneciente" name="Parametro_perteneciente" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Usuario">Nombre sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-pencil-square-o" style="color: #40e0d0" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="Nombre_sensor" class="form-control" id="Nombre_sensor"  required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label" for="Nombre Mision">Rango Medicion</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tachometer" style="color: #40e0d0" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="Rango" class="form-control" id="Nombre_Mision"  required>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-4 ">
                                            <label class="control-label" for="Precision sensor">Precision sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-tachometer" style="color: #40e0d0" aria-hidden="true"></i>
                                                </div>
                                                <input class="form-control" id="Precision" name="Precision" type="text"/>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label" for="Correo">Estado sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-heartbeat" style="color: #40e0d0" aria-hidden="true"></i>
                                                </div>
                                                <select id="Tipo_Medicion" name="Estado" class="form-control">
                                                    <option></option>
                                                    <option selected value="">--</option>
                                                    <option value="Activo">Activo</option>
                                                    <option value="Inactivo">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <button type="button" class="btn btn-info float-right" id="bt-registrarSensor" onclick="Registrar_Sensor();">Guardar</button>
                            </div>
                        </div>

                        <!--LISTA DE SENSORES-->
                        <div class="card">
                            <div class="card-header text-white" style="background-color: #18A8B4;" >
                                <strong>Lista de Sensores</strong>
                            </div>
                            <div class="card-body">
                                <div id="tabla_sensor"></div>
                            </div>
                        </div>

                    </div>


                    <!-- Modal actualizar sensor-->

                    <div class="modal fade" id="Sensor_Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header modal-header-warning">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modificar Sensor</h5>
                                </div>
                                <div class="modal-body">
                                    <form id="Actualizar_Sensor">
                                        <input type="text" id="IDu" name="ID" hidden="">
                                        <div class="form-group">
                                            <label for="Usuario">Parametro asociado</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-flask" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <select id="Parametro" name="Parametro_perteneciente" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Usuario">Nombre sensor</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-pencil-square-o" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="Nombre_sensorU" class="form-control" id="Nombre_s_U"  required>
                                            </div>
                                        </div>

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
                                                <select id="EstadoU" name="Estado" class="form-control">
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
                                    <button type="button" class="btn btn-warning" id="btn-updatePN" onclick="Actualizar_Sensor();" data-dismiss="modal">Actualizar</button>
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
