<?php

require ('../models/ModelUsuario.php');

$Usuario = new ModelUsuario;

switch ($_REQUEST["opcion"]) {
    case 'validar_usuario':
        if (isset($_POST["Correo"], $_POST["Password"]) && !empty($_POST["Correo"]) && !empty($_POST["Password"])) {

            if ($Usuario->ValidarUsuario($_POST["Correo"], $_POST["Password"])) {
                $response = 1;
            } else {
                $response = 2;
            }
        } else {
            $response = 3;
        }
        echo $response;
        break;
}
?>