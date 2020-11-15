<?php
    session_start();
    if (isset($_SESSION["user"])) {
      header('Location: views/inicio');
    }   
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aqualis</title>
    <meta name="description" content="Login">
    <link rel="shortcut icon" href="images/logo3.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body style=" background: #55566bf5">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-form">
                    <form id="fomr_1" onsubmit="return ValidarUsuario()" method="POST" autocomplete="off">
                        <div class="card card-img-top">
                            <div>
                                <img src="images/aqualis.png" class="img-responsive" alt="logo principal" width="200px;" style="margin-left: 130px">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="email">Correo</label>
                            <div class="input-group">
                                <input class="form-control" id="Correo" name="Correo" type="email" autofocus="" required="" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label " for="email">Contraseña</label>
                            <div class="input-group">
                                <input class="form-control" id="Password" name="Password" type="password" required="" />
                            </div>
                        </div>
                        <button  type="submit" class="btn btn-success btn-lg">Entrar</button>
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



