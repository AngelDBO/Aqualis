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
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
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
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

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
                                            <br>

                                            <!-- ============= | FORMULARIO PERSONA NATURAL | ================-->

                                            <div class="table-stats order-table ov-h">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="serial">#</th>

                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Product</th>
                                                            <th>Quantity</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Louis Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Louis Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Louis Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Louis Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div> <!-- /.table-stats -->
                                        </div>

                                        <!-- ============= | FORMULARIO PERSONA JURIDICA | ================-->

                                        <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel" aria-labelledby="custom-nav-profile-tab">
                                            <br>
                                            <div class="table-stats order-table ov-h">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="serial">#</th>

                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Product</th>
                                                            <th>Quantity</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Louis Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Louis Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">1.</td>

                                                            <td> #5469 </td>
                                                            <td>  <span class="name">Louis Stanley</span> </td>
                                                            <td> <span class="product">iMax</span> </td>
                                                            <td><span class="count">231</span></td>
                                                            <td>
                                                                <span class="badge badge-complete">Complete</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="serial">4.</td>

                                                            <td> #5466 </td>
                                                            <td>  <span class="name">Mary Silva</span> </td>
                                                            <td> <span class="product">Magic Mouse</span> </td>
                                                            <td><span class="count">250</span></td>
                                                            <td>
                                                                <span class="badge badge-pending">Pending</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
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

        <footer class="site-footer">
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
