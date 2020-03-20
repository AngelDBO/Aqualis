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
                                                    <span class="btn btn-warning btn-sm">
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
}
