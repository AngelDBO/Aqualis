<?php

require ('../models/ModelPersona.php');

$Persona = new ModelPersona;



switch ($_REQUEST["opcion"]) {


    case 'Listar_Persona_Natural':

        if ($Datos = $Persona->ListarPersonasNaturales()) {

            $tabla = '<table id="myTable" class = "table table-bordered table-hover dt-responsive nowrap">
            <thead>
            <tr>
            <th>Documento</th>
            <th>Numero</th>
            <th>Nombre</th>
            <!-- <th>Segundo Nombre</th> -->
            <th>Apellido</th>
            <!-- <th>Segundo Apellido</th> -->
            <th>Telefono</th>
            <!-- <th>Telefono Alternativo</th> -->
            <!--<th>Direccion</th> -->
            <th>Correo</th>
            <!-- <th>Registro</th> -->
            <th>Estado</th>
            <th>Actualizar</th>
            </tr>
            </thead>
            <tbody>';
            $datosTabla = "";

            foreach ($Datos as $key => $value) {
                $datosTabla = $datosTabla . '<tr>

                <td class="serial">' . $value['TIPO_DOCUMENTO'] . '</td>
                <td class="serial">' . $value['NUMERO_DOCUMENTO'] . '</td>
                <td class="serial">' . $value['NOMBRE_1'] . '</td>
                <!-- <td class="serial">' . $value['NOMBRE_2'] . '</td> -->
                <td class="serial">' . $value['APELLIDO_1'] . '</td>
                <!-- <td class="serial">' . $value['APELLIDO_2'] . '</td> -->
                <td class="serial">' . $value['TELEFONO_1'] . '</td>
                <!--<td class="serial">' . $value['TELEFONO_2'] . '</td> -->
                <!-- <td class="serial">' . $value['DIRECCION'] . '</td> -->
                <td class="serial">' . $value['CORREO'] . '</td>
                <!-- <td class="serial">' . $value['TIMESTAMP'] . '</td> -->
                <td><span class="badge badge-pill badge-complete">' . $value['ESTADO'] . '</span></td>
                <td>
                <span class="btn btn-warning btn-sm"  onclick="ObtenerDatoNaturalID(' . $value['ID'] . ');"
                data-toggle="modal" data-target="#MAPN1">
                <i class="fa fa-edit"></i>
                </span>
                </td>
                </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }
        break;

    case 'Listar_Persona_Juridica':

        if ($Datos = $Persona->ListarPersonasJuridicas()) {

            $tabla = '<table class = "table table-bordered table-hover">
            <thead>
            <tr>
            <th>Documento</th>
            <th>NIT</th>
            <th>Nombre</th>
            <th>Representante</th>
            <!-- <th>Razon Social</th> -->
            <!-- <th>Tipo Actividad</th> -->
            <!-- <th>Regimen</th> -->
            <!-- <th>Naturaleza</th> -->
            <th>Telefono</th>
            <!-- <th>Telfono Alternativo</th> -->
            <!-- <th>Direccion</th> -->
            <th>Correo</th>
            <!-- <th>Registro</th> -->
            <th>Estado</th>
            <th>Opcion</th>
            </tr>
            </thead>
            <tbody>';
            $datosTabla = "";

            foreach ($Datos as $key => $value) {
                $datosTabla = $datosTabla . '<tr>

                <td class="serial">' . $value['TIPO_DOCUMENTO'] . '</td>
                <td class="serial">' . $value['NIT'] . '</td>
                <td class="serial">' . $value['NOMBRE_EMPRESA'] . '</td>
                <td class="serial">' . $value['REPRESENTANTE_EMPRESA'] . '</td>
                <!-- <td class="serial">' . $value['RAZON_SOCIAL'] . '</td> -->
                <!-- <td class="serial">' . $value['TIPO_ACTIVIDAD'] . '</td> -->
                <!-- <td class="serial">' . $value['REGIMEN'] . '</td> -->
                <!-- <td class="serial">' . $value['NATURALEZA'] . '</td> -->
                <td class="serial">' . $value['TELEFONO_1'] . '</td>
                <!-- <td class="serial">' . $value['TELEFONO_2'] . '</td> -->
                <!-- <td class="serial">' . $value['DIRECCION'] . '</td> -->
                <td class="serial">' . $value['CORREO'] . '</td>
                <!-- <td class="serial">' . $value['TIMESTAMP'] . '</td> -->
                <td><span class="badge badge-pill badge-complete">' . $value['ESTADO'] . '</span></td>
                <td>
                <span class="btn btn-warning btn-sm" onclick="ObtenerDatoJuridicoID(' . $value['ID'] . ');"
                data-toggle="modal" data-target="#MAPN2" >
                <i class="fa fa-edit"></i>
                </span>
                </td>

                </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }
        break;


    case 'Registrar_Persona_Natural':
        $val = htmlspecialchars($_POST['Numero_Documento']);
        $correo = htmlspecialchars($_POST['Correo']);
        $numero = htmlspecialchars($_POST['Numero_Documento']);
        $nombre1 = htmlspecialchars($_POST['Primer_Nombre']);
        $telefono1 = htmlspecialchars($_POST['Telefono_1']);
        $apellido1 = htmlspecialchars($_POST['Primer_Apellido']);


        if (empty($correo) or empty($numero) or empty($nombre1) or empty($apellido1) or empty($telefono1)) {
            $response = 2;
        } else if ($Persona->Validar_Cliente_Natural($val)) {
            $response = 3;
        } else {
            $datos = array(
                'TIPO_PERSONA' => 'NATURAL',
                'CORREO' => $_POST['Correo'],
                'TIPO_DOCUMENTO' => $_POST['Tipo_Documento'],
                'NUMERO_DOCUMENTO' => $_POST['Numero_Documento'],
                'NOMBRE_1' => $_POST['Primer_Nombre'],
                'NOMBRE_2' => $_POST['Segundo_Nombre'],
                'APELLIDO_1' => $_POST['Primer_Apellido'],
                'APELLIDO_2' => $_POST['Segundo_Apellido'],
                'TELEFONO_1' => $_POST['Telefono_1'],
                'TELEFONO_2' => $_POST['Telefono_2'],
                'DIRECCION' => $_POST['Direccion']
            );
            $Persona->RegistrarPersonaNatural($datos);
            $response = 1;
        }
        echo $response;
        break;

    case 'Registrar_Persona_Juridica':
        $validador = htmlspecialchars($_POST['Nit']);
        $nit = htmlspecialchars($_POST['Nit']);
        $nombre_empresa = htmlspecialchars($_POST['Nombre_Empresa']);
        $representante = htmlspecialchars($_POST['Representante_Legal']);
        $regimen = htmlspecialchars($_POST['Regimen']);
        $telefono = htmlentities($_POST['Telefono_1']);
        $correo_empresa = htmlspecialchars($_POST['Correo']);

        if (empty($nit) or empty($nombre_empresa) or empty($representante) or empty($regimen) or empty($telefono) or empty($correo_empresa)) {
            $response = 2;
        } else if ($Persona->Validar_Cliente_Juridico($validador)) {
            $response = 3;
        } else {
            $datos = array(
                'TIPO_DOCUMENTO' => 'NIT',
                'TIPO_PERSONA' => 'JURIDICA',
                'CORREO' => $_POST['Correo'],
                'NIT' => $_POST['Nit'],
                'NOMBRE_EMPRESA' => $_POST['Nombre_Empresa'],
                'REPRESENTANTE_EMPRESA' => $_POST['Representante_Legal'],
                'RAZON_SOCIAL' => $_POST['Razon_Social'],
                'TIPO_ACTIVIDAD' => $_POST['Tipo_Actividad'],
                'REGIMEN' => $_POST['Regimen'],
                'NATURALEZA' => $_POST['Naturaleza'],
                'TELEFONO_1' => $_POST['Telefono_1'],
                'TELEFONO_2' => $_POST['Telefono_2'],
                'DIRECCION' => $_POST['Direccion']
            );
            $Persona->RegistrarPersonaJuridica($datos);
            $response = 1;
        }
        echo $response;
        break;

    case 'ObtenerDatoNaturalID':
        if (isset($_POST['ID']) && !empty($_POST['ID'])) {
            $data = $Persona->ObtenerDatoNaturalID($_POST['ID']);
            if ($data) {
                $list[] = array(
                    "ID" => $data['ID'],
                    "TIPO_DOCUMENTO" => $data['TIPO_DOCUMENTO'],
                    "NUMERO_DOCUMENTO" => $data['NUMERO_DOCUMENTO'],
                    "NOMBRE_1" => $data['NOMBRE_1'],
                    "NOMBRE_2" => $data['NOMBRE_2'],
                    "APELLIDO_1" => $data['APELLIDO_1'],
                    "APELLIDO_2" => $data['APELLIDO_2'],
                    "TELEFONO_1" => $data['TELEFONO_1'],
                    "TELEFONO_2" => $data['TELEFONO_2'],
                    "DIRECCION" => $data['DIRECCION'],
                    "CORREO" => $data['CORREO'],
                    "ESTADO" => $data['ESTADO']
                );
                echo json_encode($list);
            }
        }

        break;

    case 'ObtenerDatoJuridicoID':
        if (isset($_POST['ID']) && !empty($_POST['ID'])) {
            $data = $Persona->ObtenerDatoJuridicoID($_POST['ID']);
            if ($data) {
                $list[] = array(
                    "ID" => $data['ID'],
                    "TIPO_DOCUMENTO" => $data['TIPO_DOCUMENTO'],
                    "NIT" => $data['NIT'],
                    "NOMBRE_EMPRESA" => $data['NOMBRE_EMPRESA'],
                    "REPRESENTANTE_EMPRESA" => $data['REPRESENTANTE_EMPRESA'],
                    "RAZON_SOCIAL" => $data['RAZON_SOCIAL'],
                    "TIPO_ACTIVIDAD" => $data['TIPO_ACTIVIDAD'],
                    "REGIMEN" => $data['REGIMEN'],
                    "NATURALEZA" => $data['NATURALEZA'],
                    "TELEFONO_1" => $data['TELEFONO_1'],
                    "TELEFONO_2" => $data['TELEFONO_2'],
                    "DIRECCION" => $data['DIRECCION'],
                    "CORREO" => $data['CORREO'],
                    "ESTADO" => $data['ESTADO']
                );
                echo json_encode($list);
            }
        }

        break;

    case 'Actualizar_Persona_Natural':
        $datos = array(
            'CORREO' => $_POST['CorreoU'],
            'TIPO_DOCUMENTO' => $_POST['Tipo_DocumentoU'],
            'NUMERO_DOCUMENTO' => $_POST['Numero_DocumentoU'],
            'NOMBRE_1' => $_POST['Primer_NombreU'],
            'NOMBRE_2' => $_POST['Segundo_NombreU'],
            'APELLIDO_1' => $_POST['Primer_ApellidoU'],
            'APELLIDO_2' => $_POST['Segundo_ApellidoU'],
            'TELEFONO_1' => $_POST['Telefono_1U'],
            'TELEFONO_2' => $_POST['Telefono_2U'],
            'DIRECCION' => $_POST['DireccionU'],
            'ESTADO' => $_POST['EstadoU'],
            'ID' => $_POST['ID']
        );


        if ($Persona->EditarPersonaNatural($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }

        echo $response;
        break;

    case 'Actualizar_Persona_Juridica':
        $datos = array(
            'TIPO_DOCUMENTO' => $_POST['Tipo_IdentificacionU'],
            'NIT' => $_POST['NitU'],
            'NOMBRE_EMPRESA' => $_POST['Nombre_EmpresaU'],
            'REPRESENTANTE_EMPRESA' => $_POST['Representante_LegalU'],
            'RAZON_SOCIAL' => $_POST['Razon_SocialU'],
            'TIPO_ACTIVIDAD' => $_POST['Tipo_ActividadU'],
            'REGIMEN' => $_POST['RegimenU'],
            'NATURALEZA' => $_POST['NaturalezaU'],
            'TELEFONO_1' => $_POST['Telefono_1'],
            'TELEFONO_2' => $_POST['Telefono_2U'],
            'DIRECCION' => $_POST['DireccionU'],
            'CORREO' => $_POST['CorreoU2'],
            'ESTADO' => $_POST['EstadoU'],
            'ID' => $_POST['IDu']
        );

        if ($Persona->EditarPersonaJuridica($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }

        echo $response;

        break;

    case 'Contar_Personas':
        if ($data = $Persona->contarCLientes()) {

            echo json_encode($data);
        }

        break;


    case 'Validar_CLiente':
        $numero = 2019;
        if ($Persona->Validar_Cliente_Juridico($numero)) {
            echo "Ya existe";
        } else {
            echo "No existe";
        }

        break;
}
