<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
        <br>
            <ul class="nav navbar-nav">

                <!-- ============= | INICIO | ================-->

                <li class="active">
                    <a href="inicio.php"><i class="menu-icon fa fa-tachometer"></i>Home </a>
                </li>


                <!-- ============= | GESTION MISIONES | ================-->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-eject"></i>Mision</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="./mision.php">Registrar Mision</a></li>
                        <li><i class="fa fa-sitemap"></i><a href="./sensor.php">Registrar mediciones</a></li>
                        <li><i class="fa fa-bars"></i><a href="./inc/ui-tabs.html">Historial Misiones</a></li>
                    </ul>
                </li>

                <!-- ============= | GESTION EXPORTACION | ================-->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-archive-o"></i>Solicitudes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-file-archive-o"></i><a href="./cliente.php">Exportacion Data</a></li>
                        <li><i class="menu-icon fa fa-file-archive-o"></i><a href="./cliente2.php">Gestion Data</a></li>
                    </ul>
                </li>


                <!-- ============= | GESTION REPORTES | ================-->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Reportes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="./inc/charts-chartjs.html">Misiones</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="./inc/charts-flot.html">Sensores Estado</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="./inc/charts-peity.html">Clientes</a></li>
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="./inc/charts-chartjs.html">Mediciones</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="./inc/charts-flot.html">Zonas Misiones</a></li>
                    </ul>
                </li>

                <!-- ============= | GESTION CONFIGURACION | ================-->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-sliders"></i>Configuracion</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-users"></i><a href="./cliente.php">Registar Clientes</a></li>
                        <li><i class="menu-icon fa fa-users"></i><a href="./cliente2.php">Gestionar Clientes</a></li>
                    <hr>
                        <li><i class="menu-icon fa fa-sliders"></i><a href="./usuario.php">Usuarios</a></li>
                        <hr>
                        <li><i class="menu-icon fa fa-toggle-on"></i><a href="./parametro.php">Parametros</a></li>
                        <hr>
                        <li><i class="fa fa-sitemap"></i><a href="./sensor.php">Registrar Sensor</a></li>
                        <li><i class="fa fa-sitemap"></i><a href="./gestions.php">Gestion Sensor</a></li>
                        <hr>
                        
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>