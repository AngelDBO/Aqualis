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
                                <h1>Gestion Mantenimiento</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="sensor.php"><span class="badge badge-primary">Registrar</span></a></li>
                                    <li><a href="mantenimiento.php"><span class="badge badge-danger">Mantenimiento</span></a></li>
                                    <li><a href="lectura.php"><span class="badge badge-success">Lectura sensor</span></a></li>
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
                        <div class="card ">
                            <div class="card-header">
                                <strong>Registros </strong>
                            </div>
                            <div class="card-body">
                                <!-- ============= | FORMULARIO MANTENIMIENTO | ================-->
                                <form id="F_Mantenimiento" autocomplete="off">
                                    <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="Sensor">Seleccione sensor</label>
                                        <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-sitemap" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                            <select id="Sensor_nombre" name="Nombre_sensor" class="form-control"></select>
                                        </div>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Fecha Mantenimiento">Fecha mantenimiento</label>
                                            <div class="input-group">
                                            <div class="input-group-addon">
                                                    <i class="fa fa-calendar" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                            <input type="date" name="Fecha_Mantenimiento" class="form-control" id="Fecha_Mantenimiento"  required>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="Tipo Mantenimiento">Tipo mantenimiento</label>
                                            <div class="input-group">
                                            <div class="input-group-addon">
                                                    <i class="fa fa-cogs" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                            <input type="text" name="Tipo_Mantenimiento" class="form-control" id="Tipo_Mantenimiento" required>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Descripcion">Descripcion</label>
                                            <textarea name="Descripcion" class="form-control" id="Descripcion" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="bt-registrarMantenimineto" onclick="Registar_Mantenimiento();">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-lg-12">
                        <div class="card ">
                            <div class="card-header">
                                <strong>Registros </strong>
                            </div>
                            <div class="card-body">
                                <!-- ============= | TABLA MANTENIMIENTO | ================-->
                                <div id="Tabla_Mantenimiento"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>

        <!--MODAL ACTUALIZAR MANTENIMIENTO-->
        <div class="modal fade" id="Mantenimiento_Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header modal-header-warning">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modificar mantenimiento</h5>
                                </div>
                                <div class="modal-body">
                                    <form id="Actualizar_Mantenimiento">
                                        <input type="text" id="IDu" name="ID" hidden="" >
                                        <div class="form-group">
                                            <label for="Sensor asociado">Sensor asociado</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-sitemap" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <select id="Sensor_nombreU" name="Sensor_asociado" class="form-control"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Fecha mantenimiento">Fecha mantenimiento</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="Fecha_mantenimientoU" class="form-control" id="Fecha_U"  required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="Tipo Mantenimiento">Tipo Mantenimiento</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-cogs" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <input type="text" name="Tipo" class="form-control" id="TipoU"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Descripcion">Descripcion</label>
                                            <textarea name="DescripcionU" class="form-control" id="DES" rows="3"></textarea>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-warning" id="btn-updatePN" onclick="Actualizar_Mantenimiento();" data-dismiss="modal">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
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
    <script src="../assets/funciones/funciones.js"></script>
    <script src="../ajax/Mantenimiento.js"></script>
    <script>
    init();
    </script>


    <script>
                                        jQuery(document).ready(function() {
                                            jQuery(".standardSelect").chosen({
                                                disable_search_threshold: 10,
                                                no_results_text: "Oops, nothing found!",
                                                width: "100%"
                                            });
                                        });
    </script>

</body>
</html>
