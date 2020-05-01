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
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-lg-12">
                            <div class="card ">
                                <div class="card-header text-center ">
                                    <strong>Registros </strong>
                                </div>
                                <div class="card-body">
                                    <!-- ============= | FORMULARIO REGISTRO USUARIO | ================-->

                                    <form id="F_Usuario" autocomplete="off">
                                                    
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="TipoUsuario">Rol</label>
                                                            <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-address-book-o" style="color: #03a9f3" aria-hidden="true"></i>
                                                            </div>
                                                            <select id="Rol" name="Rol" class="form-control">
                                                                <option></option>
                                                                <option selected value="">--</option>
                                                                <option value="Administrador">Administrador</option>
                                                                <option value="Operario">Operario</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Usuario">Usuario</label>
                                                            <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-user-circle" style="color: #03a9f3" aria-hidden="true"></i>
                                                            </div>
                                                            <input type="text" name="Usuario" class="form-control" id="Usuario"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="Nombre">Nombre</label>
                                                            <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-id-badge" style="color: #03a9f3" aria-hidden="true"></i>
                                                            </div>
                                                            <input type="text" name="Nombre" class="form-control" id="Nombre" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="Apellido">Apellido</label>
                                                            <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-id-badge" style="color: #03a9f3" aria-hidden="true"></i>
                                                            </div>
                                                            <input type="text" name="Apellido" class="form-control" id="Apellido">
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                            <label for="Correo">Correo *</label>
                                                            <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-envelope" style="color: #03a9f3" aria-hidden="true"></i>
                                                            </div>
                                                            <input type="email" name="Correo" class="form-control" id="Correo" required>
                                                            </div>
                                                        </div>
                                                    <div class="form-group col-md-3">
                                                            <label for="Contraseña">Contraseña</label>
                                                            <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-key" style="color: #03a9f3" aria-hidden="true"></i>
                                                            </div>
                                                            <input type="password" name="password" class="form-control" id="password">
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group col-md-3">
                                                            <label for="Estado">Estado</label>
                                                            <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="fa fa-info-circle" style="color: #03a9f3" aria-hidden="true"></i>
                                                            </div>
                                                            <select id="Estado" name="Estado" class="form-control">
                                                                <option></option>
                                                                <option selected value="">--</option>
                                                                <option value="Activo">Activo</option>
                                                                <option value="Inactivo">Inactivo</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-success float-right" id="bt-registrarUsuario" onclick="RegistrarUsuario();">Guardar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                        <!--Tabla de usuarios-->

                        <div class="col-xs-6 col-sm-6 col-lg-12">
                            <div class="card ">
                                <div class="card-header text-center">
                                    <strong>Mantenimiento</strong>
                                </div>
                                <div class="card-body">
                                <div class="table-stats order-table ov-h">
                                                            <div id="TablaUsuario"></div>
                                                        </div> <!-- /.table-stats -->
                                </div>
                            </div>
                        </div>

                    <!--MODAL ACTUALIZAR USUARIO-->
                    <div class="modal fade" id="modal_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header-warning">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>

      </div>
      <div class="modal-body">
      <form id="FP_Juridica">
                                                <p class="spam">* Campos obligatorios</p>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="Tipo Identificacion">Rol usuario</label>
                                                        <select id="inputState" class="form-control">
                                                            <option selected>NIT</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4"> Usuario</label>
                                                        <input type="text" name="Nit" class="form-control" id="inputPassword4">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress">Nombres</label>
                                                        <input type="text" name="Nombre_Empresa" class="form-control" id="inputAddress" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress2">Apellidos</label>
                                                        <input type="text" name="Representante_Legal" class="form-control" id="inputAddress2" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputCity">Correo</label>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
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
    <?php
} else {
    header("location:../");
}
?>