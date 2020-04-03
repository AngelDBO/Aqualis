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
                                    <li><a href="inicio.php">Home</a></li>
                                    <li class="active">Advanced</li>
                                </ol>
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
                            <div class="card-header">
                                <strong>Listado Clientes</strong>
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
                                            <br>

                                            <!-- ============= | TABLA PERSONA NATURAL | ================-->

                                            <div class="table-stats order-table ov-h">

                                                <div id="TablaPersonaNatural"></div>

                                            </div> <!-- /.table-stats -->
                                        </div>

                                        <!-- ============= | FORMULARIO PERSONA JURIDICA | ================-->

                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <br>
                                            <div class="table-stats order-table ov-h">

                                                <div id="TablaPersonaJuridica"></div>

                                            </div> <!-- /.table-stats -->
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

        <!-- Modal Persona Natural-->

        <div class="modal fade" id="MAPN1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Cliente Natural</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form id="FP_Ac_Natural">

                            <input type="text" id="ID" name="ID" hidden="">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="Tipo Documento">Tipo Documento</label>
                                    <select id="TipoDocumentoU" name="Tipo_DocumentoU" class="form-control">
                                        <option></option>
                                        <option selected value="CC">CEDULA CIUDADANIA</option>
                                        <option value="TI">TARJETA DE IDENTIDAD</option>
                                        <option value="RC">REGISTRO CIVIL</option>
                                        <option value="CE">CEDULA EXTRANJERA</option>
                                        <option value="LM">LIBRETA MILITAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Numero Documento">Numero Documento</label>
                                    <input type="text" name="Numero_DocumentoU"  class="form-control" id="Numero_DocumentoU">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Primer Nombre">Primer Nombre</label>
                                    <input type="text" name="Primer_NombreU" class="form-control" id="Primer_NombreU" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Segundo Nombre</label>
                                    <input type="text" name="Segundo_NombreU" class="form-control" id="Segundo_NombreU" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Primer Apellido</label>
                                    <input type="text" name="Primer_ApellidoU" class="form-control" id="Primer_ApellidoU" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Segundo Apellido</label>
                                    <input type="text" name="Segundo_ApellidoU" class="form-control" id="Segundo_ApellidoU" placeholder="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputZip">Direccion</label>
                                    <input type="text" name="DireccionU" class="form-control" id="DireccionU">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">Telefono 1</label>
                                    <input type="text" name="Telefono_1U" class="form-control" id="Telefono_1U">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">Telefono 2</label>
                                    <input type="text" name="Telefono_2U" class="form-control" id="Telefono_2U">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Correo</label>
                                <input type="email" name="CorreoU" class="form-control" id="CorreoU" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Estado</label>
                                <select id="EstadoU" name="EstadoU" class="form-control">
                                    <option value="Activo" selected>Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-updatePN" onclick="ActualizarPersonaNatural();" data-dismiss="modal">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL PERSONA JURIDICA-->


        <div class="modal fade" id="MAPN2" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Cliente Juridico</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="FP_Ac_Juridica">
                            <input type="text" id="IDu" name="IDu" hidden="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tipo Identificacion</label>
                                    <select id="Tipo_IdentificacionU" class="form-control" name="Tipo_IdentificacionU">
                                        <option selected>NIT</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">NIT(*)</label>
                                    <input type="text" name="NitU" class="form-control" id="NitU">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Nombre Empresa</label>
                                    <input type="text" name="Nombre_EmpresaU" class="form-control" id="Nombre_EmpresaU" placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Representante Legal</label>
                                    <input type="text" name="Representante_LegalU" class="form-control" id="Representante_LegalU" placeholder="">
                                </div>
                            </div>
                            <div class="form-row" autocomplete="off" >
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Razon Social</label>
                                    <input type="text" name="Razon_SocialU" class="form-control" id="Razon_SocialU">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputState">Tipo Actividad</label>
                                    <input type="text" name="Tipo_ActividadU" class="form-control" id="Tipo_ActividadU">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputZip">Regimen</label>
                                    <input type="text" name="RegimenU" class="form-control" id="RegimenU">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputZip">Naturaleza</label>
                                    <input type="text" name="NaturalezaU" class="form-control" id="NaturalezaU">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="inputAddress2">Telefono 1</label>
                                    <input type="text" name="Telefono_1" class="form-control" id="Telefono_11" placeholder="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="inputAddress2">Telfono 2</label>
                                    <input type="text" name="Telefono_2U" class="form-control" id="Telefono_22" placeholder="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="inputAddress2">Direccion</label>
                                    <input type="text" name="DireccionU" class="form-control" id="DireccionU2" placeholder="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="inputAddress2">Correo</label>
                                    <input type="email" name="CorreoU2" class="form-control" id="CorreoU2" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Estado</label>
                                <select id="Est_U" name="EstadoU" class="form-control">
                                    <option value="Activo" selected>Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" id="btn-updatePJ" data-dismiss="modal" onclick="ActualizarPersonaJuridica();">Actualizar</button>
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
    <script src="../ajax/Persona.js"></script>
    <script src="../assets/sweetalert.js"></script>
    <script src="../assets/jquery-3.2.1.js"></script>
    <script type="text/javascript">
                            init();
    </script>


</body>
</html>
