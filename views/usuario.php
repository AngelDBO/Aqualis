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
                            <a class="nav-link" href="./usuario.php"><i class="fa fa-user"></i>Perfil</a>

                           <!-- <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notificaciones <span class="count">13</span></a>

                           <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a> -->

                            <a class="nav-link" href="../index.php"><i class="fa fa-power-off"></i>Cerrar Sesion</a>
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
                                <h1>Gestion Usuario</h1>
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

        <div class="content">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-lg-12">
                        <div class="card ">
                            <div class="card-header">
                                <strong>Registros </strong>
                            </div>
                            <div class="card-body">
                                <div class="custom-tab">

                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab" href="#custom-nav-natural" role="tab" aria-controls="custom-nav-home" aria-selected="true">Registrar</a>
                                            <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab" href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile" aria-selected="false">Gestion</a>

                                        </div>
                                    </nav>
                                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="custom-nav-natural" role="tabpanel" aria-labelledby="custom-nav-home-tab">

                                            <!-- ============= | FORMULARIO REGISTRO USUARIO | ================-->

                                            <form id="F_Usuario" autocomplete="off">
                                                <br>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="TipoUsuario">Rol</label>
                                                        <select id="Rol" name="Rol" class="form-control">
                                                            <option></option>
                                                            <option selected value="">--</option>
                                                            <option value="Administrador">Administrador</option>
                                                            <option value="Operario">Operario</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="Usuario">Usuario</label>
                                                        <input type="text" name="Usuario" class="form-control" id="Usuario"  required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="Nombre">Nombre</label>
                                                        <input type="text" name="Nombre" class="form-control" id="Nombre" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="Apellido">Apellido</label>
                                                        <input type="text" name="Apellido" class="form-control" id="Apellido">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="Contraseña">Contraseña</label>
                                                        <input type="password" name="password" class="form-control" id="password">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Correo">Correo *</label>
                                                    <input type="email" name="Correo" class="form-control" id="Correo" required>
                                                </div> 
                                                <div class="form-group col-md-6">
                                                    <label for="Estado">Estado</label>
                                                    <select id="Estado" name="Estado" class="form-control">
                                                            <option></option>
                                                            <option selected value="">--</option>
                                                            <option value="Activo">Activo</option>
                                                            <option value="Inactivo">Inactivo</option>
                                                        </select>
                                                </div> 
                                                </div>
                                                <button type="button" class="btn btn-success" id="bt-registrarUsuario" onclick="RegistrarUsuario();">Guardar</button>
                                            </form>
                                        </div>



                                        <!-- ============= | GESTION USUARIO | ================-->

                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                        <div class="col-xl-12">
                                        <br>
                                        <div class="card">
                                            
                                                <div class="table-stats order-table ov-h">
                                                    <div id="TablaUsuario"></div>
                                                </div> <!-- /.table-stats -->
                                            
                                        </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->
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

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2020 AQUALIS
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
    <script src="../ajax/Usuario.js"></script>
    <script src="../assets/jquery-3.2.1.js"></script>
    <script src="../assets/sweetalert.js"></script>
    <script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>
    <script src="../assets/funciones/funciones.js"></script>
   
        <script type="text/javascript">
                            init();
    </script>
   
    


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
