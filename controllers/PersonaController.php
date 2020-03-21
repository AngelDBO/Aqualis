<?php

require ('../models/ModelPersona.php');

$Persona = new ModelPersona;



switch ($_REQUEST["opcion"]) {


    case 'Listar_Persona_Natural':

        if ($Datos = $Persona->ListarPersonasNaturales()) {

            $tabla = '<table class = "table table-bordered table-hover">
                        <thead>
                            <tr>

                                <th>Tipo Documento</th>
                                <th>Numero Identificacion</th>
                                <th>Primer Nombre</th>
                                <th>Segundo Nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>
                                <th>Telefono Personal</th>
                                <th>Telefono Alternativo</th>
                                <th>Direccion</th>
                                <th>Correo</th>
                                <th>Fecha Registro</th>
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
                                                <td class="serial">' . $value['NOMBRE_2'] . '</td>
                                                <td class="serial">' . $value['APELLIDO_1'] . '</td>
                                                <td class="serial">' . $value['APELLIDO_2'] . '</td>
                                                <td class="serial">' . $value['TELEFONO_1'] . '</td>
                                                <td class="serial">' . $value['TELEFONO_2'] . '</td>
                                                <td class="serial">' . $value['DIRECCION'] . '</td>
                                                <td class="serial">' . $value['CORREO'] . '</td>
                                                <td class="serial">' . $value['TIMESTAMP'] . '</td>
                                                <td><span class="badge badge-complete">' . $value['ESTADO'] . '</span></td>
                                                <td>
                                                    <span class="btn btn-warning btn-sm"  onclick="ObtenerDatoNaturalID(' . $value['ID'] . ')"
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
                                <th>Tipo Documento</th>
                                <th>NIT</th>
                                <th>Nombre</th>
                                <th>Representante</th>
                                <th>Razon Social</th>
                                <th>Tipo Actividad</th>
                                <th>Regimen</th>
                                <th>Naturaleza</th>
                                <th>Telefono</th>
                                <th>Telfono Alternativo</th>
                                <th>Direccion</th>
                                <th>Correo</th>
                                <th>Fecha Registro</th>
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
                                                <td class="serial">' . $value['RAZON_SOCIAL'] . '</td>
                                                <td class="serial">' . $value['TIPO_ACTIVIDAD'] . '</td>
                                                <td class="serial">' . $value['REGIMEN'] . '</td>
                                                <td class="serial">' . $value['NATURALEZA'] . '</td>
                                                <td class="serial">' . $value['TELEFONO_1'] . '</td>
                                                <td class="serial">' . $value['TELEFONO_2'] . '</td>
                                                <td class="serial">' . $value['DIRECCION'] . '</td>
                                                <td class="serial">' . $value['CORREO'] . '</td>
                                                <td class="serial">' . $value['TIMESTAMP'] . '</td>
                                                <td><span class="badge badge-complete">' . $value['ESTADO'] . '</span></td>
                                                <td>
                                                    <span class="btn btn-warning btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                    </span>
                                                </td>

                                            </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }
        break;


    case 'Registrar_Persona_Natural':

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

        if (!empty($datos)) {
            if ($Persona->RegistrarPersonaNatural($datos)) {
                $response = 1;
            } else {
                $response = 2;
            }
        }
        echo $response;

        break;

    case 'Registrar_Persona_Juridica':

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

        if (!empty($datos)) {
            if ($Persona->RegistrarPersonaJuridica($datos)) {
                $response = 1;
            } else {
                $response = 2;
            }
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
}
