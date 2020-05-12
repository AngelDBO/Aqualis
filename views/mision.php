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
                                    <h1>Gestion misiones</h1>
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

            <div class="content">
                <div class="animated fadeIn">

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-lg-12">
                            <div class="card ">
                                <div class="card-header text-white text-center" style="background-color: #18A8B4;" >
                                    <strong>Formulario de Mision</strong>
                                </div>
                                <div class="card-body ">
                                    <!-- ============= | FORMULARIO MISION | ================-->

                                    <form id="F_mision" autocomplete="off">
                                    <input type="input" value="<?php echo $_SESSION["user"]["ID"]; ?>" name="usuario_mision" readonly hidden>
                                    <p class="spam text-left">* Campos obligatorios</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Usuario">Usuario : </label>
                                                <span class="badge badge-pill badge-info"></span>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" value="<?php echo $_SESSION["user"]["USUARIO"]; ?>" class="form-control"  readonly required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Nombre Mision">Nombre Mision</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-wpforms" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" name="Nombre_Mision" class="form-control" id="Nombre_Mision" autofocus="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="Correo">* Lugar Mision</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-map-o" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="text" name="Lugar_Mision" class="form-control" id="Lugar_Mision" required>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="Fecha inicio">* Fecha mision</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar-plus-o" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="date" name="Fecha_inicio" class="form-control" id="Lugar_Mision" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div>
                                                <label for="Correo">Longitud Lugar</label>
                                            </div>
                                        </div>
                                        <div class="input-group  col-mb-3">
                                            <div class="input-group-addon">
                                                <i class="fa fa-map-marker" style="color: #03a9f3" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control" name="Longitud" id="val_longitud" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="loader" id="lonLoader"></div>
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="button" onclick="getDataLongitud('longitud')">Obtener</button>
                                            </div>
                                        </div>
                                        <div>
                                            <br>
                                            <label for="Correo">Latitud Lugar</label>
                                        </div>
                                        <div class="input-group  col-mb-3">
                                            <div class="input-group-addon">
                                                <i class="fa fa-map-marker" style="color: #03a9f3" aria-hidden="true"></i>
                                            </div>
                                            <div ></div>
                                            <input id="val_latitud" type="text" class="form-control" name="Latitud"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                            <div class="loader" id="latLoader"></div>
                                                <button class="btn btn-info" type="button" onclick="getData('latitud')">Obtener</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="Correo">* Punto de toma</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-random" style="color: #03a9f3" aria-hidden="true"></i>
                                                </div>
                                                <select id="Tipo_Medicion" name="Tipo_Medicion" class="form-control">
                                                    <option></option>
                                                    <option  value="Lagos naturales">Lagos naturales</option>
                                                    <option  value="Lagos artificiales">Lagos artificiales</option>
                                                    <option  value="Estereos">Estereos</option>
                                                    <option  value="Jagueyes">Jagueyes</option>
                                                    <option  value="Estanques">Estanques</option>
                                                    <option  value="Rios">Rios</option>
                                                    <option  value="Quebradas">Quebradas</option>
                                                    <option  value="Cañada">Cañada</option>
                                                    <option  value="Cuerpos corrientes">Cuerpos corrientes</option>
                                                    <option  value="Pozo subterraneo">Pozo subterraneo</option>
                                                    <option  value="Nacedero">Nacedero</option>
                                                    <option  value="Manantiales">Manantiales</option>
                                                    <option  value="Tanque de almacenamiento">Tanque de almacenamiento</option>
                                                    <option  value="Agua lluvia">Agua lluvia</option>
                                                    <option  value="Agua en bloque">Agua en bloque</option>
                                                    <option  value="Hielo a granel">Hielo a granel</option>
                                                    <option  value="Aguas marinas">Aguas marinas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Descripcion</label>
                                            <textarea class="form-control" name="Descripcion_mision" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-info float-right" id="bt-registrarMision" onclick="Registrar_Mision();">
                                        <span class="btn-label"><i class="fa fa-save"></i></span> Guardar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .animated -->
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
        <script src="../assets/jquery-3.2.1.js"></script>
        <script src="../assets/sweetalert.js"></script>
        <script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>
        <script src="../assets/funciones/funciones.js"></script>
        <script src="../ajax/Mision.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        var access_token = '9123cb666006da51e97339195aa16b2224c43278';
        var device_id = '1b003b000747363335343832';
        $('#latLoader, #lonLoader').hide();
        function getData(variable){
            $('#'+variable+'Loader').show();
            $.ajax({
                url: 'https://api.particle.io/v1/devices/'+device_id+'/'+variable+'?access_token='+access_token,
                method: 'GET',
                success: function(response){
                    
                    $('#val_latitud').val(response.result);
                    
                    
                    $('#'+variable+'Loader').hide();
                }
            });
        }
        </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
        var access_token = '9123cb666006da51e97339195aa16b2224c43278';
        var device_id = '1b003b000747363335343832';
        
        function getDataLongitud(variable){    
            $.ajax({
                url: 'https://api.particle.io/v1/devices/'+device_id+'/'+variable+'?access_token='+access_token,
                method: 'GET',
                success: function(response){            
                    $('#val_longitud').val(response.result);   
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