<?php
include './content/head.php';

session_start();

if (isset($_SESSION["user"])) {
    ?>

    <body class="open">
        <!-- Left Panel -->
        <?php include './content/sidebar.php'; ?>
        <!-- Left Panel -->
        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
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
            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4">
                            <!--LISTA DE SENSORES-->
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #43c6e2;" >
                                    <strong>Registrar mediciones</strong>
                                </div>
                                <div class="card-body">
                                    <form id="F_mediciones" autocomplete="off">
                                        <div class="form-group ">
                                            <input type="text" name="IDu" id="id_mision" hidden="" readonly>
                                            <label for="Usuario">Codigo mision</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-hashtag" style="color: #808080" aria-hidden="true"></i>
                                                </div>
                                                <input type="text"  class="form-control" id="codigoM"  readonly>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label  for="Nombre Mision">Tiempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-clock-o" style="color: #808080" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="range" min="1" max="20" name="Rango" class="form-control" id="get" onchange="fetch()">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Nombre Mision">Minutos</label>
                                                <div class="input-group">
                                                    <input type="text" id="put" name="Rango" class="form-control"   readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Correo">Resultado mision</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-heartbeat" style="color: red" aria-hidden="true"></i>
                                                </div>
                                                <select id="Tipo_Medicion" name="Estado" class="form-control">
                                                    <option value="" disabled=""></option>
                                                    <option value="Exitosa">Exitosa</option>
                                                    <option value="Anulada">Anulada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr style="border: solid #43c6e2 1px">
                                    </form>
                                    <button type="button" class="btn btn-success" id="bt-registrar" onclick="iniciar()" style="background: #43c6e2;border-color: #43c6e2">Iniciar</button>
                                    <button type="button" class="btn btn-danger" id="btn-estado" onclick="estado()">Finalizar</button>
                                    <button type="button" class="btn btn-secondary float-right countdown" id="closeC" style="cursor: help;">Tiempo</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #43c6e2;" >
                                    <strong>Data obtenida</strong>
                                </div>
                                <div class="card-body">
                                    <table id="example" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Temperatura</th>
                                                <th>pH</th>
                                                <th>Turbidez</th>
                                                <th>EC</th>
                                                <th>TDS</th>
                                                <th>ORP</th>
                                                <th>Timestamp</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
            <div class="clearfix"></div>
        </div><!-- /#right-panel -->

        <!-- Right Panel -->

        <!-- Scripts -->

        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>  
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="../assets/js/main.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
        <script src="../assets/jquery-3.2.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/sweetalert.js"></script>
        <!--<script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>-->
        <script src="../ajax/Mediciones.js"></script>
        <script src="../ajax/Sensor.js"></script>
        <script>
            $('#closeC').attr("style", "pointer-events: none;");

            function fetch()
            {
                var get = document.getElementById("get").value;
                document.getElementById("put").value = get;
            }

            function iniciar() {

                if ($('#put').val() == "") {
                    Swal.fire(
                        'Aviso!',
                        'Debes establecer un tiempo de lectura',
                        'warning'
                        )
                } else {
                    start();
                    time();
                    $('#bt-registrar').prop('disabled', true);
                    $('#btn-estado').prop('disabled', true);
                    $('#Tipo_Medicion').prop('disabled', false);
                    $('#pu').prop('disabled', true);
                }
            }

            function time() {
                var timer2 = $('#put').val() + ":01";
                console.log(timer2);
                var interval = setInterval(function () {
                    var timer = timer2.split(':');
                                                //by parsing integer, I avoid all extra string processing
                                                var minutes = parseInt(timer[0], 10);
                                                var seconds = parseInt(timer[1], 10);
                                                --seconds;
                                                minutes = (seconds < 0) ? --minutes : minutes;
                                                seconds = (seconds < 0) ? 59 : seconds;
                                                seconds = (seconds < 10) ? '0' + seconds : seconds;
                                                //minutes = (minutes < 10) ?  minutes : minutes;
                                                $('.countdown').html("Finaliza en: " + minutes + ':' + seconds);
                                                if ((seconds <= 0) && (minutes <= 0))
                                                    clearInterval(interval);
                                                timer2 = minutes + ':' + seconds;
                                                if ((seconds <= 0) && (minutes <= 0))
                                                    $("#closeC").trigger("click")
                                                timer2 = minutes + ':' + seconds;
                                                if ((seconds <= 0) && (minutes <= 0))
                                                    $('#btn-estado').prop('disabled', false)
                                                timer2 = minutes + ':' + seconds;

                                            }, 1000);

            }

            function start() {
                var deviceID = "1b003b000747363335343832";
                var accessToken = "f3e94b1aeb3754abfdc3804c54253621aba58514";
                var eventSource = new EventSource("https://api.spark.io/v1/devices/" + deviceID + "/events/?access_token=" + accessToken);
                eventSource.addEventListener('open', function (e) {
                    console.log("Opened!");
                }, false);
                eventSource.addEventListener('error', function (e) {
                    console.log("Errored!");
                }, false);
                $('#closeC').click(function () {
                    eventSource.close();
                    console.log("Closed");
                    Swal.fire(
                        'Fin!',
                        'La lectura ha finalizado!',
                        'success'
                        )
                });
                eventSource.addEventListener('data', function (e) {
                    var parsedData = JSON.parse(e.data);
                    var data = parsedData.data.split(",");
                    let turbidez = data[0];
                    let ph = data[1];
                    let temperatura = data[2];
                    let tds = data[3];
                    let lat = data[4];
                    let lon = data[5];
                    let orp = data[6];
                    let idmision = $('#id_mision').val();
                    enviar(idmision, turbidez, ph, temperatura, tds, lat, lon, orp)
                    $('#example').DataTable().ajax.reload(null, false)
                }, false);
            }

            function enviar(idmision, turbidez, ph, temperatura, tds, lat, lon, orp) {
                cadena = "idmision=" + idmision + "&turbidez=" + turbidez + "&ph=" + ph + "&temperatura=" + temperatura + "&tds=" + tds + "&latitud=" + lat + "&longitud=" + lon + "&Redox=" + orp;
               console.log(cadena);
               $.ajax({
                    type: "POST",
                    data: cadena,
                    url: "./../controllers/MedicionController.php?opcion=RegistrarDatos",
                    success: function (r) {
                        console.log(r);
                    }
                });
            }
            livedata()
            function livedata() {
                var table = $('#example').dataTable({
                    "bProcessing": true,
                    "serverSide": false,
                    "bFilter": false,
                    "ajax": "./../controllers/MedicionController.php?opcion=LiveData",
                    "bPaginate": false,
                    "sPaginationType": "full_numbers",
                    "columnDefs": [
                    {"className": "dt-center", "targets": "_all"}
                    ],
                    "iDisplayLength": 25,
                    "aoColumns": [
                    {mData: 'TEMPERATURA'},
                    {mData: 'PH'},
                    {mData: 'TURBIDEZ'},
                    {mData: 'EC'},
                    {mData: 'TDS'},
                    {mData: 'REDOX'},
                    {mData: 'FECHA_MEDICION'}
                    ]
                });
            }

            function estado() {
                cadena = "id=" + $('#id_mision').val() + "&estado=" + $('#Tipo_Medicion').val();
                $.ajax({
                    type: 'POST',
                    data: cadena,
                    url: "./../controllers/MisionController.php?opcion=Estado_mision",
                    success: function (r) {
                        console.log(r);
                        if (r == 1) {
                            Swal.fire({
                                title: 'Aviso',
                                text: "Estado asigando con exito",
                                icon: 'success',
                                allowOutsideClick: false
                            }).then(function (result) {
                                if (result.value) {
                                    window.location = "mision";
                                }
                            })
                        }
                    }
                });
            }


        </script>
    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>