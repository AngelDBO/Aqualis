<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aqualis</title>
        <meta name="description" content="Login">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">     
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body class="bg" style="background: lightblue;">
        <div class="sufee-login d-flex align-content-center flex-wrap">
            <div class="container">
                <div class="login-content">
                    <div class="login-logo">
                        <img class="align-content" src="images/logo.png" alt="">
                    </div>
                    <div class="login-form">
                        <form id="fomr_1">


                        <div class="form-group ">
                            <label class="control-label " for="email">Correo</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <input class="form-control" id="Correo" name="Correo" type="text" autofocus=""/>
                            </div>
                        </div> 


                        <div class="form-group ">
                            <label class="control-label " for="email">Correo</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                <i class="fa fa-key" aria-hidden="true"></i>
                                </div>
                                <input class="form-control" id="Password" name="Password" type="password"/>
                            </div>
                        </div> 

                            
                            <button type="button" class="btn btn-info"  id="btn-guardar" onclick="ValidarUsuario()">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="assets/sweetalert.js"></script>
        <script src="assets/funciones/funciones.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="ajax/Usuario.js"></script>
        <script src="assets/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            validarLogin();
        </script>

</html>



