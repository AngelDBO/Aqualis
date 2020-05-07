
<?php
session_start();
if (isset($_SESSION["user"])) {
    include './content/head.php';
    ?>

    <body>

        <!-- Left Panel -->
        <?php include './content/sidebar.php'; ?>
        <!-- /#left-panel -->


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
                        <!--  <div class="header-left">

                              <div class="dropdown for-notification">
                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-bell"></i>
                                      <span class="count bg-danger">3</span>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="notification">
                                      <p class="red">Tienes 3 Notificaciones</p>
                                      <a class="dropdown-item media" href="#">
                                          <i class="fa fa-check"></i>
                                          <p>Server #1 overloaded.</p>
                                      </a>
                                      <a class="dropdown-item media" href="#">
                                          <i class="fa fa-info"></i>
                                          <p>Server #2 overloaded.</p>
                                      </a>
                                      <a class="dropdown-item media" href="#">
                                          <i class="fa fa-warning"></i>
                                          <p>Server #3 overloaded.</p>
                                      </a>
                                  </div>
                              </div>

                              <div class="dropdown for-message">
                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fa fa-envelope"></i>
                                      <span class="count bg-primary">4</span>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="message">
                                      <p class="red">You have 4 Mails</p>
                                      <a class="dropdown-item media" href="#">
                                          <span class="photo media-left"><img alt="avatar" src="./../images/avatar/1.jpg"></span>
                                          <div class="message media-body">
                                              <span class="name float-left">Jonathan Smith</span>
                                              <span class="time float-right">Just now</span>
                                              <p>Hello, this is an example msg</p>
                                          </div>
                                      </a>
                                      <a class="dropdown-item media" href="#">
                                          <span class="photo media-left"><img alt="avatar" src="./../images/avatar/2.jpg"></span>
                                          <div class="message media-body">
                                              <span class="name float-left">Jack Sanders</span>
                                              <span class="time float-right">5 minutes ago</span>
                                              <p>Lorem ipsum dolor sit amet, consectetur</p>
                                          </div>
                                      </a>
                                      <a class="dropdown-item media" href="#">
                                          <span class="photo media-left"><img alt="avatar" src="./../images/avatar/3.jpg"></span>
                                          <div class="message media-body">
                                              <span class="name float-left">Cheryl Wheeler</span>
                                              <span class="time float-right">10 minutes ago</span>
                                              <p>Hello, this is an example msg</p>
                                          </div>
                                      </a>
                                      <a class="dropdown-item media" href="#">
                                          <span class="photo media-left"><img alt="avatar" src="./../images/avatar/4.jpg"></span>
                                          <div class="message media-body">
                                              <span class="name float-left">Rachel Santos</span>
                                              <span class="time float-right">15 minutes ago</span>
                                              <p>Lorem ipsum dolor sit amet, consectetur</p>
                                          </div>
                                      </a>
                                  </div>
                              </div>
                          </div> -->

                        <?php require_once './content/menu.php' ?>

                    </div>
                </div>
            </header>

            <!-- ============= | footer | ================-->

            <?php include './content/contenido.php'; ?>

            <div class="clearfix"></div>

            <!-- ============= | footer | ================-->



        </div>

        <!-- ============= | footer | ================-->

        <?php include './content/scripts.php'; ?>


        <script src="../ajax/Persona.js"></script>
        <script>
            Contar_Persona();
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#bootstrap-data-table').DataTable(
                        {
                            "language": {
                                "sProcessing": "Procesando...",
                                "sLengthMenu": "Mostrar _MENU_ registros",
                                "sZeroRecords": "No se encontraron resultados",
                                "sEmptyTable": "Ningún dato disponible en esta tabla",
                                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                                "sInfoPostFix": "",
                                "sSearch": "Buscar:",
                                "sUrl": "",
                                "sInfoThousands": ",",
                                "sLoadingRecords": "Cargando...",
                                "oPaginate": {
                                    "sFirst": "Primero",
                                    "sLast": "Último",
                                    "sNext": "Siguiente",
                                    "sPrevious": "Anterior"
                                },
                                "oAria": {
                                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                },
                                "buttons": {
                                    "copy": "Copiar",
                                    "colvis": "Visibilidad"
                                }
                            }
                        }
                );
            });
        </script>

    </body>
    </html>
    <?php
} else {
    header("location:../");
}
?>