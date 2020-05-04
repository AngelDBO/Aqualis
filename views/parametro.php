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
                                <h1>Gestion Parametros</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content ">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-lg-12">
                        <div class="card ">
                            <div class="card-header text-white" style="background-color: turquoise;" >
                                <div>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
                                        Nuevo
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-stats order-table ov-h">
                                    <div id="TablaParametro"></div>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>

        <!-- Modal Persona Natural-->

        <div class="modal fade" id="P_Modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content ">
                    <div class="modal-header-warning">
                        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Parametro</h5>
                    </div>
                    <div class="modal-body">
                        <form id="Actualizar_P">
                            <input type="text" id="ID" name="ID" hidden="">
                            <div class="form-group">
                                <label for="inputAddress2">Nombre Parametro</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil-square-o" style="color: #ffc107" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="Nombre_ParametroU" class="form-control" id="Nombre_ParametroU" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Valor Optimo</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-heart" style="color: #ffc107" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="Valor_OptimoU" class="form-control" id="Valor_OptimoU" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Valor Riesgo</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-exclamation-triangle" style="color: #ffc107" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="Valor_RiesgoU" class="form-control" id="Valor_RiesgU" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Unidad</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-certificate" style="color: #ffc107" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="UnidadU" class="form-control" id="UnidadU" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-warning" id="btn-updatePN" onclick="Actualizar_Parametro();" data-dismiss="modal">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL NUEVO-->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header-success">
                        <h5 class="modal-title" id="staticBackdropLabel">Registrar Parametro</h5>

                    </div>
                    <div class="modal-body">
                        <form id="Registar_Parametro">


                            <div class="form-group">
                                <label for="inputAddress2">Nombre Parametro</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil-square-o" style="color: #5cb85c" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="Nombre_Parametro" class="form-control" id="Nombre_Parametro" placeholder="">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="Valor Optimo">Valor Optimo</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-heart" style="color: #5cb85c" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="Valor_Optimo" class="form-control" id="Valor_Optimo" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Valor Riesgo">Valor Riesgo</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-exclamation-triangle" style="color: #5cb85c" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="Valor_Riesgo" class="form-control" id="Valor_Riesgo" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Unidad">Unidad</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-certificate" style="color: #5cb85c" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" name="Unidad" class="form-control" id="Unidad" placeholder="">
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="RegistrarParametro();">Guardar</button>
                    </div>
                </div>
            </div>
        </div>



        <footer class="site-footer">
            <div class="footer-inner bg-white">
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
    <script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="../ajax/Parametro.js"></script>
    <script src="../assets/sweetalert.js"></script>
    <script src="../assets/jquery-3.2.1.js"></script>
    <script type="text/javascript">
                            init();
    </script>


</body>
</html>
