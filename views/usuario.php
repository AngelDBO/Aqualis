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
                <!--<div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"></a>
                        <a class="navbar-brand hidden" href="./"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div> -->
                <div class="top-right">
                    <div class="header-menu">


                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="./../images/admin.jpg" alt="User Avatar">
                            </a>
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="./usuario.php"><i class="fa fa-user"></i>Perfil</a>
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
                                <div class="card-header text-white" style="background-color: #18A8B4;" >
                                    <strong>Registros </strong>
                                </div>
                                <div class="card-body">
                                    <!-- ============= | FORMULARIO REGISTRO USUARIO | ================-->

                                    <form id="F_Usuario" onsubmit="return RegistrarUsuario();" method="POST" autocomplete="off">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="TipoUsuario">Rol</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-address-book-o" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <select id="Rol" name="Rol" class="form-control" required="">
                                                        <option selected value="" disabled=""></option>
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
                                                    <input type="password" name="pass" class="form-control" id="password" required="">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="Estado">Estado</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-info-circle" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <select id="Estado" name="Estado" class="form-control" required="">
                                                        <option selected value="" disabled=""></option>
                                                        <option value="Activo">Activo</option>
                                                        <option value="Inactivo">Inactivo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info float-right" id="bt-registrarUsuario">
                                            <span class="btn-label"><i class="fa fa-save"></i></span> Guardar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!--Tabla de usuarios-->

                        <div class="col-xs-6 col-sm-6 col-lg-12">
                            <div class="card ">
                                <div class="card-header text-white" style="background-color: #18A8B4;" >
                                    <strong>Usuarios registrados</strong>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div id="TablaUsuario"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--MODAL ACTUALIZAR USUARIO-->
                        <div class="modal fade" id="modal_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form id="form_usuarioU">
                                            <input id="IDupdate" name="UD_usu"hidden>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Rol Usuario">Rol usuario</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-address-book-o" style="color: #03a9f3" aria-hidden="true"></i>
                                                        </div>
                                                        <select name="Rol_usuarioU" class="form-control" id="User_U" >
                                                            <option value="NA">--</option>
                                                            <option value="Adminitrador">Administrador</option>
                                                            <option value="Operario">Operario</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="Usuario"> Usuario</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-user-circle" style="color: #03a9f3" aria-hidden="true"></i>
                                                        </div>
                                                        <input type="text" name="usuario_U" class="form-control" id="UsuarioU">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Nombres">Nombres</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-id-badge" style="color: #03a9f3" aria-hidden="true"></i>
                                                        </div>
                                                        <input type="text" name="Nombres_U" class="form-control" id="NombresU" >
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="Apellidos">Apellidos</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-id-badge" style="color: #03a9f3" aria-hidden="true"></i>
                                                        </div>
                                                        <input type="text" name="Apellidos_U" class="form-control" id="ApellidosU" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="Correo">Correo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-envelope" style="color: #03a9f3" aria-hidden="true"></i>
                                                        </div>
                                                        <input type="email" name="Correo_U" class="form-control" id="CorreoU">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="Contraseña">Contraseña</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-key" style="color: #03a9f3" aria-hidden="true"></i>
                                                        </div>
                                                        <input type="password" name="Pass_U" class="form-control" id="PassU">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <label for="Estado usuario">Estado</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-info-circle" style="color: #03a9f3" aria-hidden="true"></i>
                                                    </div>
                                                    <select name="Estado_U" id="EstadoU" class="form-control">
                                                        <option value="Activo">Activo</option>
                                                        <option value="Inactivo">Inactivo</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="Actualizar_Usuario();">
                                            <span class="btn-label"><i class="fa fa-edit"></i></span> Actualizar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
            <div class="clearfix"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="../assets/js/main.js"></script>
        <script src="../ajax/Usuario.js"></script>
        <script src="../assets/jquery-3.2.1.js"></script>
        <script src="../assets/sweetalert.js"></script>
        <script src="../assets/funciones/funciones.js"></script>
        <script type="text/javascript">
            init();
        </script>
    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>