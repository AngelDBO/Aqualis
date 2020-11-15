<?php

require ('../models/ModelSensor.php');

$Sensor = new ModelSensor;

switch ($_REQUEST["opcion"]) {

    case 'Obtener_ID':
        if (isset($_POST['ID']) && !empty($_POST['ID'])) {
            $data = $Sensor->ObtenerID($_POST['ID']);
            if ($data) {
                $list[] = array(
                    "ID" => $data['ID'],
                    "NOMBRE_SENSOR" => $data['NOMBRE_SENSOR'],
                    "RANGO_MEDICION" => $data['RANGO_MEDICION'],
                    "PRECISION_MEDICION" => $data['PRECISION_MEDICION'],
                    "ESTADO_SENSOR" => $data['ESTADO_SENSOR'],
                    "PARAMETRO_ID" => $data['PARAMETRO_ID']
                );
                echo json_encode($list);
            }
        }
        break;

    case 'Select_Parametro':
        $datos = $Sensor->SelectParametro();
        if ($datos) {
            for ($i = 0; $i < count($datos); $i++) {
                $list[] = array(
                    "0" => $datos[$i]['ID'],
                    "1" => $datos[$i]['NOMBRE_PARAMETRO']
                );
            }
            echo json_encode($list);
        }

        break;

    case 'Listar_Sensores':
        $datos = $Sensor->Listar_Sensores();
        if ($datos) {
            $tabla = '<table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Parametro</th>
                    <th>Nombre sensor</th>
                    <th>Rango medición</th>
                    <th>Precisión medición</th>
                    <th>Estado</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>';
            $datosTabla = "";

            foreach ($datos as $key => $value) {
                $datosTabla = $datosTabla . '<tr>
                <td class="serial">' . $value['ID'] . '</td>
                <td class="serial">' . $value['NOMBRE_PARAMETRO'] . '</td>
                <td class="serial">' . $value['NOMBRE_SENSOR'] . '</td>
                <td class="serial">' . $value['RANGO_MEDICION'] . '</td>
                <td class="serial">' . $value['PRECISION_MEDICION'] . '</td>
                <td><span class="badge badge-pill ">' . $value['ESTADO_SENSOR'] . '</span></td>
                <td>
                    <span class="btn btn-warning btn-sm"  onclick="ObtenerIDSensor(' . $value['ID'] . ');"
                    data-toggle="modal" data-target="#Sensor_Modal">
                    <i class="fa fa-edit"></i>
                    </span>
                </td>
                </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }
        break;

    case 'Registrar_Sensor':
        $datos = array(
            'RANGO_MEDICION' => $_POST['Rango'],
            'PRECISION_MEDICION' => $_POST['Precision'],
            'ESTADO_SENSOR' => $_POST['Estado'],
            'PARAMETRO_ID' => $_POST['Parametro_perteneciente'],
            'NOMBRE_SENSOR' => $_POST['Nombre_sensor']
        );
        if ($Sensor->Registrar_Sensor($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;

        break;

    case 'Actualizar_Sensor':
        $datos = array(
            'ID' => $_POST['ID'],
            'PARAMETRO_ID' => $_POST['Parametro_perteneciente'],
            'NOMBRE_SENSOR' => $_POST['Nombre_sensorU'],
            'RANGO_MEDICION' => $_POST['RangoU'],
            'PRECISION_MEDICION' => $_POST['Precision'],
            'ESTADO_SENSOR' => $_POST['Estado']
        );

        if ($Sensor->Actualizar_Sensor($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;


        break;
}