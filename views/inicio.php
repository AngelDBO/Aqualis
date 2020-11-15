
<?php
session_start();
if (isset($_SESSION["user"])) {
    include './content/head.php';
    ?>
    <body class="open">
        <?php include './content/sidebar.php'; ?>
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
                    <div class="header-menu">
                        <?php require_once './content/menu.php' ?>
                    </div>
                </div>
            </header>
            <?php include './content/contenido.php'; ?>
            <div class="clearfix"></div>
        </div>
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