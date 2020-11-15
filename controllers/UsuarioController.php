<?php

session_start();
require ('../models/ModelUsuario.php');

$Usuario = new ModelUsuario;

switch ($_REQUEST["opcion"]) {

    case 'Listar_Usuario':

        if ($Datos = $Usuario->ListarUsuarios()) {

            $tabla = '<table  class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Rol</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Estado</th>
                               <!-- <th>Fecha Registro</th> -->
                                <th>Opcion</th>
                            </tr>
                        </thead>
                        <tbody>';
            $datosTabla = "";

            foreach ($Datos as $key => $value) {
                $datosTabla = $datosTabla . '<tr>

                                                <td class="serial">' . $value['ID'] . '</td>
                                                <td class="serial">' . $value['ROL'] . '</td>
                                                <td class="serial">' . $value['NOMBRE'] . '</td>
                                                <td class="serial">' . $value['APELLIDO'] . '</td>
                                                <td class="serial">' . $value['USUARIO'] . '</td>
                                                <td class="serial">' . $value['CORREO'] . '</td>
                                                <td><span class="badge badge-pill badge-complete">' . $value['ESTADO'] . '</span></td>
                                               <!-- <td class="serial">' . $value['TIMESTAMP'] . '</td> -->

                                                <td>
                                                    <span class="btn btn-warning btn-sm" onclick="ObtenerID(' . $value['ID'] . ');"
                                                       data-toggle="modal" data-target="#modal_usuario" >
                                                    <i class="fa fa-edit"></i>
                                                    </span>
                                                </td>

                                            </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }

        break;



    case 'validar_usuario':
        if (isset($_POST["Correo"], $_POST["Password"]) && !empty($_POST["Correo"]) && !empty($_POST["Password"])) {

            if ($user = $Usuario->ValidarUsuario($_POST["Correo"], $_POST["Password"])) {
                foreach ($user as $campos => $valor) {
                    $_SESSION["user"][$campos] = $valor;
                }
                $response = 1;
            } else {
                $response = 2;
            }
        } else {
            $response = 3;
        }
        echo $response;
        break;

    case 'Registrar_Usuario':
        $datos = array(
            'NOMBRE' => $_POST['Nombre'],
            'APELLIDO' => $_POST['Apellido'],
            'ROL' => $_POST['Rol'],
            'USUARIO' => $_POST['Usuario'],
            'PASSWORD' => $_POST['pass'],
            'CORREO' => $_POST['Correo'],
            'ESTADO' => $_POST['Estado']
        );

        if ($Usuario->RegistrarUsuario($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;
        break;

    case 'ObtenerID':
        if (isset($_POST['ID']) && !empty($_POST['ID'])) {
            $data = $Usuario->ObtenerID($_POST['ID']);
            if ($data) {
                $list[] = array(
                    "ID" => $data['ID'],
                    "NOMBRE" => $data['NOMBRE'],
                    "APELLIDO" => $data['APELLIDO'],
                    "ROL" => $data['ROL'],
                    "USUARIO" => $data['USUARIO'],
                    "CORREO" => $data['CORREO'],
                    "ESTADO" => $data['ESTADO']
                );
                
            }
            echo json_encode($list);
        }
        break;

    case 'Actualizar_Usuario':
        $datos = array(
            'ROL' => $_POST['Rol_usuarioU'],
            'USUARIO' => $_POST['usuario_U'],
            'NOMBRE' => $_POST['Nombres_U'],
            'APELLIDO' => $_POST['Apellidos_U'],
            'CORREO' => $_POST['Correo_U'],
            'PASSWORD' => $_POST['Pass_U'],
            'ESTADO' => $_POST['Estado_U'],
            'ID' => $_POST['UD_usu']
        );
        if ($Usuario->ActualizarUsuario($datos)) {
            $response = 1;
        }else{
            $response = 2;
        }
        echo $response;
    break;

    case 'Cerrar_Sesion':
        session_destroy();
        header("location:../");
        break;
}
?>