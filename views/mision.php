<?php include './content/head.php'; 
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
                                <h1>Gestion Mision</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="mision.php"><span class="badge badge-primary">Registrar mision</span></a></li>
                                    <li><a href="mediciones.php"><span class="badge badge-danger">Registrar mediciones</span></a></li>
                                    <li><a href="historial.php"><span class="badge badge-success">Historial de mediciones</span></a></li>
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
                                <strong>Formulario de Mision</strong>
                            </div>
                            <div class="card-body bg-light">
                                <!-- ============= | FORMULARIO PERSONA NATURAL | ================-->

                                <form id="FP_Natural" autocomplete="off">
                                    <br>
                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <label for="Usuario">Usuario</label>
                                            <input type="text" name="Nombre_Mision" value="  <?php echo $_SESSION["user"]["USUARIO"];?>" class="form-control" id="Nombre_Mision" readonly required> 
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Nombre Mision">Nombre Mision</label>
                                            <input type="text" name="Nombre_Mision" class="form-control" id="Nombre_Mision" autofocus="" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                       <label for="Correo">Lugar Mision</label>
                                        <input type="text" name="Lugar_Mision" class="form-control" id="Lugar_Mision" required>
                                       </div>
                                       <div class="form-group col-md-6">
                                       <label for="Correo">Fecha Inicio</label>
                                        <input type="date" name="Lugar_Mision" class="form-control" id="Lugar_Mision" required>
                                       </div>
                                    </div>
                                    <div class="form-row">
                                    <div>
                                    <label for="Correo">Longitud Lugar</label>
                                    </div>
                                    </div>
                                    <div class="input-group  col-mb-3">
                                    
                                        <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">Obtener</button>
                                        </div>
                                    </div>
                                    <div>
                                    <br>
                                    <label for="Correo">Latitud Lugar</label>
                                    </div>
                                    <div class="input-group  col-mb-3">
                                    
                                        <input type="text" class="form-control"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">Obtener</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="Correo">Tipo Medicion</label>
                                        <select id="Tipo_Medicion" name="Tipo_Medicion" class="form-control">
                                                <option></option>
                                                <option selected value="CC">--</option>
                                                <option value="Acueducto">Acueducto</option>
                                                <option value="In Situ">In Situ</option>
                                                <option value="Zona de Extraccion">Zona de Extraccion</option>

                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descripcion</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-success" id="bt-registrarMision">Guardar</button>
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
                        Copyright &copy; <?php echo date('Y');?> Aqualis
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
<?php

}else{
    header("location:../");
}
?>