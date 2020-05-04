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
                                <h1>Lectura Sensores</h1>
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

        <div class="content ">




            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;" >
                            <h4 class="my-0 font-weight-normal">Temperatura</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00 <small class="text-muted" > °c</small></h1>
                            <div>
                                <img src="./../images/iconos/temp.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>

                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;" >
                            <h4 class="my-0 font-weight-normal">ph</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00 <small class="text-muted" > °c</small></h1>
                            <div>
                                <img src="./../images/iconos/ppm.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>

                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;" >
                            <h4 class="my-0 font-weight-normal">Total solidos disueltos</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00 <small class="text-muted" > ms/cs</small></h1>
                            <div>
                                <img src="./../images/iconos/ppm.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>

                        </div>
                    </div>
                </div>
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;" >
                            <h4 class="my-0 font-weight-normal">Conductividad electrica</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00 <small class="text-muted" > °c</small></h1>
                            <div>
                                <img src="./../images/iconos/meter.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>

                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;" >
                            <h4 class="my-0 font-weight-normal">Potencial redox</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00 <small class="text-muted" > mv</small></h1>
                            <div>
                                <img src="./../images/iconos/meter.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>

                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;" >
                            <h4 class="my-0 font-weight-normal">Turbidez</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00 <small class="text-muted" > °c</small></h1>
                            <div>
                                <img src="./../images/iconos/tds.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>

                        </div>
                    </div>
                </div>


            </div>
            <div class="container">
                <div class="card-deck mb-12 text-center">
                    <div class="card mb-6 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;">
                            <h4 class="my-0 font-weight-normal">Longitud GPS</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00</h1>
                            <div>
                                <img src="./../images/iconos/gps.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>
                        </div>
                    </div>
                    <div class="card mb-6 box-shadow">
                        <div class="card-header text-white" style="background-color: turquoise;">
                            <h4 class="my-0 font-weight-normal">Latitud GPS</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00</h1>
                            <div>
                                <img src="./../images/iconos/gps2.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger">Obtener valor</button>
                        </div>
                    </div>

                </div>


            </div>
        </div><!-- .content -->
        <div class="clearfix"></div>


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



































