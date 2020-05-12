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
                <?php require_once './content/menu.php'?>
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
                        <div class="card-header text-white" style="background-color: #18A8B4" >
                            <h4 class="my-0 font-weight-normal">Temperatura</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="val_temp">00.00 <small class="text-muted" > °c</small></h1>
                            <div>
                                <img src="./../images/iconos/temp.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger" >Obtener valor</button>

                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #18A8B4;" >
                            <h4 class="my-0 font-weight-normal">ph</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="ph">00.00 <small class="text-muted" > °c</small></h1>
                            <div>
                                <img src="./../images/iconos/ppm.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                                <div class="loader" id="phLoader"></div>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger" onclick="getData('ph')">Obtener valor</button>

                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #18A8B4;" >
                            <h4 class="my-0 font-weight-normal">Total solidos disueltos</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="tds">00.00 <small class="text-muted" > ms/cs</small></h1>
                            <div>
                                <img src="./../images/iconos/ppm.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                                <div class="loader" id="tdsLoader"></div>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger" onclick="getData('tds')">Obtener valor</button>

                        </div>
                    </div>
                </div>
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #18A8B4;" >
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
                        <div class="card-header text-white" style="background-color: #18A8B4;" >
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
                        <div class="card-header text-white" style="background-color: #18A8B4;" >
                            <h4 class="my-0 font-weight-normal">Turbidez</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="turbidez">00.00 <small class="text-muted" > °c</small></h1>
                            <div>
                                <img src="./../images/iconos/tds.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                                <div class="loader" id="turbidezLoader"></div>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger" onclick="getData('turbidez')">Obtener valor</button>

                        </div>
                    </div>
                </div>


            </div>
            <div class="container">
                <div class="card-deck mb-12 text-center">
                    <div class="card mb-6 box-shadow">
                        <div class="card-header text-white" style="background-color: #18A8B4;">
                            <h4 class="my-0 font-weight-normal">Longitud GPS</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="longitud">00.00</h1>
                            <div>
                                <img src="./../images/iconos/gps.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                                <div class="loader" id="lonLoader"></div>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger" onclick="getData('longitud')">Obtener valor</button>
                        </div>
                    </div>
                    <div class="card mb-6 box-shadow">
                        <div class="card-header text-white" style="background-color: #18A8B4;">
                            <h4 class="my-0 font-weight-normal">Latitud GPS</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title" id="latitud">00.00</h1>
                            <div>
                                <img src="./../images/iconos/gps2.png" alt="" class="img-responsibe">
                                <br>
                                <br>
                                <div class="loader" id="latLoader"></div>
                            </div>

                            <button type="button" class="btn btn-sm  btn-danger" onclick="getData('latitud')">Obtener valor</button>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        var access_token = '9123cb666006da51e97339195aa16b2224c43278';
        var device_id = '1b003b000747363335343832';
        $('#phLoader ,#turbidezLoader, #tdsLoader, #latLoader, #lonLoader').hide();
        function getData(variable){
            $('#'+variable+'Loader').show();
            $.ajax({
                url: 'https://api.particle.io/v1/devices/'+device_id+'/'+variable+'?access_token='+access_token,
                method: 'GET',
                success: function(response){
                    console.log(response);
                    $('#'+variable).html(response.result.toFixed(2));
                    $('#'+variable+'Loader').hide();
                }
            });
        }
        </script>


</body>
</html>



































