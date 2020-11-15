<?php include './content/head.php'; ?>
<style type="text/css">
    .check-space{
  margin-right: 15px;
}
</style>
<body class="open">
    <?php include './content/sidebar.php'; ?>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-right">
                <div class="top-right">
            <div class="header-menu">
                <?php require_once './content/menu.php' ?>
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
                                <h1 class="text-monospace font-weight-bold">Measurement Graphs</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="exportacion.php"><span class="badge badge-pill badge-primary" style="background: #808080">Registrar Exportacion</span></a></li>
                                    <li><a href="exportacion2.php"><span class="badge badge-pill badge-danger" style="background: #808080">Historial Exportacion</span></a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <!--Card Consultar-->
            <div class="card mb-6 box-shadow">
                <div class="card-header text-white text-center" style="background-color: #43c6e2;" >
                    <h4 class="text-monospace font-weight-bold">Realizar gráfica</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <select id="TipoPersona" name="Tipo_persona" class="form-control">
                            </select>
                        </div>
                        <div class="form-group col-md-5" style="padding-top: 5px;">
                            <label class="checkbox-inline check-space "><input type="checkbox" value=""> pH</label>
                            <label class="checkbox-inline check-space "><input type="checkbox" value=""> Temp</label>
                            <label class="checkbox-inline check-space "><input type="checkbox" value=""> Turbidez</label>
                            <label class="checkbox-inline check-space "><input type="checkbox" value=""> EC</label>
                            <label class="checkbox-inline check-space "><input type="checkbox" value=""> TDS</label>
                            <label class="checkbox-inline check-space "><input type="checkbox" value=""> ORP</label>
                        </div>
                        <div class="form-group col-md-3">
                            <button type="button" class="btn btn-sm  btn-warning float-left" onclick="GraficapH();">Generar graficas</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck mb-12 text-center">
                <div class="card mb-6 box-shadow">
                    <div class="card-header text-white text-center" style="background-color: #43c6e2;" >
                        <h4 class="text-monospace font-weight-bold">pH</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="line-chart" width="800" height="450"></canvas>
                    </div>
                </div>
                <div class="card mb-6 box-shadow">
                    <div class="card-header text-white text-center" style="background-color: #43c6e2;" >
                        <h4 class="text-monospace font-weight-bold">Temperatura</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="line-temp" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
            <br>
            <div class="card-deck mb-12 text-center">
                <div class="card mb-6 box-shadow">
                    <div class="card-header text-white text-center" style="background-color: #43c6e2;" >
                        <h4 class="text-monospace font-weight-bold">Turbidez</h4>
                    </div>
                    <div class="card-body">
                       <canvas id="line-turbidez" width="800" height="450"></canvas> 
                    </div>
                </div>
                <div class="card mb-6 box-shadow">
                    <div class="card-header text-white text-center" style="background-color: #43c6e2;" >
                        <h4 class="text-monospace font-weight-bold">TDS</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="line-tds" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
            <br>
            <div class="card-deck mb-12 text-center">
                <div class="card mb-6 box-shadow">
                    <div class="card-header text-white text-center" style="background-color: #43c6e2;" >
                        <h4 class="text-monospace font-weight-bold">EC</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="line-ec" width="800" height="450"></canvas>
                    </div>
                </div>
                <div class="card mb-6 box-shadow">
                    <div class="card-header text-white text-center" style="background-color: #43c6e2;" >
                        <h4 class="text-monospace font-weight-bold">ORP</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="line-orp" width="800" height="450"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="../ajax/Graficas.js"></script>
    <script src="../assets/sweetalert.js"></script>
    <script src="../assets/jquery-3.2.1.js"></script>
    <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script type="text/javascript">
   
    </script>
</body>
</html>



































