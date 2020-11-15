<?php
session_start();
if (isset($_SESSION["user"])) {
    include './content/head.php';
    ?>
    <body class="open">
        <?php include './content/sidebar.php'; ?>
        <div id="right-panel" class="right-panel">
            <header id="header" class="header">
                <div class="top-right">
                    <div class="header-menu">
                        <?php require_once './content/menu.php' ?>
                    </div>
                </div>
            </header>
            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1 class="text-monospace font-weight-bold">Lectura Sensores</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="javascript:void(0)" onclick="location.href = 'mision'"><span class="badge badge-pill badge-primary" style="background: #808080">Registrar mision</span></a></li>
                                        <li><a href="javascript:void(0)" onclick="location.href = 'mediciones'"><span class="badge badge-pill badge-danger" style="background: #808080">Registrar mediciones</span></a></li>
                                        <li><a href="javascript:void(0)" onclick="location.href = 'historial'"><span class="badge badge-pill badge-success" style="background: #808080">Historial de mediciones</span></a></li>
                                        <li><a href="javascript:void(0)" onclick="location.href = 'lectura'"><span class="badge badge-pill badge-info" style="background: #808080">Lectura sensor</span></a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content ">
                <div>
                    <button class="btn btn-info btn-sm" onclick="start()" style="background: #43c6e2;border: #43c6e2; font-size: 15px;"><h5 class="text-monospace font-weight-bold">revisar lecturas</h5></button>
                </div>

                <br>
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2" >
                            <h4 class="text-monospace font-weight-bold">Temperatura - Agua</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="val_temp">00.00 °C</h3>
                            <div>
                                <br>
                                <img src="./../images/iconos/agua-caliente.png" class="img-responsibe">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2;" >
                            <h4 class="text-monospace font-weight-bold">pH - Agua</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="ph">00.00</h3>
                            <br>
                            <div>
                                <img src="./../images/iconos/ph-metro.png" alt="" class="img-responsibe">
                                <div class="loader" id="phLoader"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2;" >
                            <h4 class="text-monospace font-weight-bold">Total solidos disueltos</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="tds">00.00 ppm</h3>
                            <div>
                                <br>
                                <img src="./../images/iconos/meter.png" alt="" class="img-responsibe">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2;" >
                            <h4 class="text-monospace font-weight-bold">Conductividad eléctrica</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="val_temp">00.00 μS/cm</h3>
                            <div>
                                <br>
                                <img src="./../images/iconos/ec.png" alt="" class="img-responsibe">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2;" >
                            <h4 class="text-monospace font-weight-bold">Potencial Redox (ORP)</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="val_temp">00.00 mV</h3>
                            <div>
                                <br>
                                <img src="./../images/iconos/redox.png" alt="" class="img-responsibe">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2;" >
                            <h4 class="text-monospace font-weight-bold">Turbidez</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="turbidez">00.00 ntu</h3>
                            <div>
                                <br>
                                <img src="./../images/iconos/turbidity.png" alt="" class="img-responsibe">
                                <div class="loader" id="turbidezLoader"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr style="border: solid;color: #808080">
                <div>
                    <h1 class="badge badge-success badge-pill text-monospace font-weight-bold" style="background: #808080">Coordenadas del sitio</h1>
                </div>
                <br>
                <div class="card-deck mb-6 text-center">
                    <div class="card mb-3 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2;">
                            <h4 class="text-monospace font-weight-bold">Longitud</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="longitud">00.00</h3>
                            <div>
                                <br>
                                <img src="./../images/iconos/gps.png" alt="" class="img-responsibe">
                                <div class="loader" id="lonLoader"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 box-shadow">
                        <div class="card-header text-white" style="background-color: #43c6e2;">
                            <h4 class="text-monospace font-weight-bold">Latitud</h4>
                        </div>
                        <div class="card-body">
                            <h3 id="latitud">00.00</h3>
                            <div>
                                <br>
                                <img src="./../images/iconos/gps2.png" alt="" class="img-responsibe">
                                <div class="loader" id="latLoader"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .content -->
            <div class="clearfix" style="background: #cecece38"></div>
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


                        function start() {
                            var deviceID = "1b003b000747363335343832";
                            var accessToken = "bae556a48b468d057a483a77c9ba31767ce65bd8";
                            var eventSource = new EventSource("https://api.spark.io/v1/devices/" + deviceID + "/events/?access_token=" + accessToken);
                            eventSource.addEventListener('open', function (e) {
                                console.log("Opened!");
                            }, false);
                            eventSource.addEventListener('error', function (e) {
                                console.log("Errored!");
                            }, false);
                            eventSource.addEventListener('data', function (e) {
                                var parsedData = JSON.parse(e.data);
                                var data = parsedData.data.split(",");
                                //var data = parsedData.data;
                                console.log(data);
                                let turbidez = data[0];
                                let ph = data[1];
                                let temperatura = data[2];
                                let tds = data[3];
                                let lat = data[4];
                                let lon = data[5];
                                //let longitud = data[1];
                                //console.log( parsedData.data);
                                //console.log(`Latitud: ${latitud}`);
                                //console.log(`Longitud: ${longitud}`);			
                                //console.log(data[1]);
                                //document.getElementById("pol").value = parsedData.data;
                                $('#turbidez').html(turbidez + ` ntu`);
                                $('#ph').html(ph);
                                $('#val_temp').html(temperatura + ` °c`);
                                $('#tds').html(tds + ` ppm`);
                                $('#latitud').html(lat);
                                $('#longitud').html(lon);
                                //$('#longitud').html(longitud);



                            }, false);
                        }
        </script>
    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>



































