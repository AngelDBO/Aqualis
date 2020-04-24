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
                                <h1>Gestion Clientes</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="cliente2.php">Gestion Clientes</a></li>
                                    
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
                                <strong>Formulario de Registro</strong>
                            </div>
                            <div class="card-body">
                                <div class="custom-tab">

                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-natural" role="tab" aria-controls="custom-nav-home" aria-selected="true">Cliente Natural</a>
                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Cliente Juridico</a>

                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="custom-nav-natural" role="tabpanel" aria-labelledby="custom-nav-home-tab">

                                            <!-- ============= | FORMULARIO PERSONA NATURAL | ================-->

                                            <form id="FP_Natural" autocomplete="off">
                                                
                                                <p class="spam">* Campos obligatorios</p>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="Tipo Documento">Tipo Documento</label>
                                                        <select id="TipoDocumento" name="Tipo_Documento" class="form-control">
                                                            <option></option>
                                                            <option selected value="CC">CEDULA CIUDADANIA</option>
                                                            <option value="TI">TARJETA DE IDENTIDAD</option>
                                                            <option value="RC">REGISTRO CIVIL</option>
                                                            <option value="CE">CEDULA EXTRANJERA</option>
                                                            <option value="LM">LIBRETA MILITAR</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="Numero Documento">* Numero Documento</label>
                                                        <input type="text" name="Numero_Documento" class="form-control" id="Numero_Documento" autofocus="" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="Primer Nombre">* Primer Nombre</label>
                                                        <input type="text" name="Primer_Nombre" class="form-control" id="Primer Nombre" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="Segundo Nombre">Segundo Nombre</label>
                                                        <input type="text" name="Segundo_Nombre" class="form-control" id="Segundo_Nombre" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="Primer Apellido">* Primer Apellido</label>
                                                        <input type="text" name="Primer_Apellido" class="form-control" id="Primer_Apellido" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="Segundo Apellido">Segundo Apellido</label>
                                                        <input type="text" name="Segundo_Apellido" class="form-control" id="Segundo_Apellido" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="Direccion">Direccion</label>
                                                        <input type="text" name="Direccion" class="form-control" id="Direccion" required>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="Telefono 1">* Telefono</label>
                                                        <input type="text" name="Telefono_1" class="form-control" id="Telefono_1" required>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="Telefono 2">Telefono 2</label>
                                                        <input type="text" name="Telefono_2" class="form-control" id="Telefono_2">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Correo">* Correo</label>
                                                    <input type="email" name="Correo" class="form-control" id="Correo" required>
                                                </div>
                                                <button type="button" class="btn btn-success" id="bt-registrarCliente" onclick="RegistarPersonaNatural();">Guardar</button>
                                            </form>
                                        </div>



                                        <!-- ============= | FORMULARIO PERSONA JURIDICA | ================-->

                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <form id="FP_Juridica">
                                            <p class="spam">* Campos obligatorios</p>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="Tipo Identificacion">Tipo Identificacion</label>
                                                        <select id="inputState" class="form-control">
                                                            <option selected>NIT</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">* Numero</label>
                                                        <input type="text" name="Nit" class="form-control" id="inputPassword4">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress">* Nombre Empresa</label>
                                                        <input type="text" name="Nombre_Empresa" class="form-control" id="inputAddress" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress2">* Representante Legal</label>
                                                        <input type="text" name="Representante_Legal" class="form-control" id="inputAddress2" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputCity">Razon Social</label>
                                                        <input type="text" name="Razon_Social" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputState">Tipo Actividad</label>
                                                        <input type="text" name="Tipo_Actividad" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputZip">* Regimen</label>
                                                        <input type="text" name="Regimen" class="form-control" id="inputZip">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputZip">Naturaleza</label>
                                                        <input type="text" name="Naturaleza" class="form-control" id="inputZip">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="inputAddress2">* Telefono 1</label>
                                                        <input type="text" name="Telefono_1" class="form-control" id="inputAddress2" placeholder="">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="inputAddress2">Telfono 2</label>
                                                        <input type="text" name="Telefono_2" class="form-control" id="inputAddress2" placeholder="">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="inputAddress2">Direccion</label>
                                                        <input type="text" name="Direccion" class="form-control" id="inputAddress2" placeholder="">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label for="inputAddress2">* Correo</label>
                                                        <input type="email" name="Correo" class="form-control" id="inputAddress2" placeholder="">
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-success" id="bt-registrarCliente"  onclick="RegistarPersonaJuridica()">Guardar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>

        <!--<footer class="site-footer">
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
        </footer> -->


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
    <script src="../ajax/Persona.js"></script>


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
