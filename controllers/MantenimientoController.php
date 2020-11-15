<?php
require ('../models/ModelMantenimiento.php');

$Mantenimiento = new ModelMantenimiento;

switch ($_REQUEST['opcion']) {

    case 'Select_Sensor':
        $datos = $Mantenimiento->Select_Sensor();
        if ($datos) {
            for ($i = 0; $i < count($datos); $i++) {
                $list[] = array(
                    "0" => $datos[$i]['ID'],
                    "1" => $datos[$i]['NOMBRE_SENSOR']
                );
            }
            echo json_encode($list);
        }

    break;

    case 'Listar_Mantenimiento':
            $datos = $Mantenimiento->Listar_Mantenimiento();
            if ($datos) {
                $tabla = '<table class ="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sensor</th>
                        <th>Fecha de mantenimiento</th>
                        <th>Tipo Mantenimiento</th>
                        <th>Descripcion</th>
                      <!--  <th>Fecha registro</th> -->
                        <th>Actualizar</th>
                    </tr>
                </thead>
                <tbody>';
                $datosTabla = "";
    
                foreach ($datos as $key => $value) {
                    $datosTabla = $datosTabla . '<tr>
                    <td class="serial">' . $value['ID'] . '</td>
                    <td class="serial">' . $value['NOMBRE_SENSOR'] . '</td>
                    <td class="serial">' . $value['FECHA_MANTENIMIENTO'] . '</td>
                    <td class="serial">' . $value['TIPO_MANTENIMIENTO'] . '</td>
                    <td class="serial">' . $value['DESCRIPCION'] . '</td>
                    <!--<td class="serial">' . $value['TIMESTAMP'] . '</span></td> -->
                    <td>
                        <span class="btn btn-warning btn-sm"  onclick="ObtenerIDMantenimiento(' . $value['ID'] . ');"
                        data-toggle="modal" data-target="#Mantenimiento_Modal">
                        <i class="fa fa-edit"></i>
                        </span>
                    </td>
                    </tr>';
                }
                echo $tabla . $datosTabla . '</tbody></table>';
            }
    break;

    case 'Registrar_Mantenimiento':
        $datos = array(
            'SENSOR_ID' => $_POST['Nombre_sensor'],
            'FECHA_MANTENIMIENTO' => $_POST['Fecha_Mantenimiento'],
            'TIPO_MANTENIMIENTO' => $_POST['Tipo_Mantenimiento'],
            'DESCRIPCION' => $_POST['Descripcion']
        );
        if ($Mantenimiento->Registrar_Mantenimiento($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;
        
    break;

    case 'Obtener_ID':
        if (isset($_POST['ID']) && !empty($_POST['ID'])) {
            $data = $Mantenimiento->Obtener_ID($_POST['ID']);
            if ($data) {
                $list[] = array(
                    "ID" => $data['ID'],
                    "SENSOR_ID" => $data['SENSOR_ID'],
                    "FECHA_MANTENIMIENTO" => $data['FECHA_MANTENIMIENTO'],
                    "TIPO_MANTENIMIENTO" => $data['TIPO_MANTENIMIENTO'],
                    "DESCRIPCION" => $data['DESCRIPCION'] 
                );
                echo json_encode($list);
            }
        }
    break;

    case 'Actualizar_Mantenimiento':
        $datos = array(
            'SENSOR_ID' => $_POST['Sensor_asociado'],
            'FECHA_MANTENIMIENTO' => $_POST['Fecha_mantenimientoU'],
            'TIPO_MANTENIMIENTO' => $_POST['Tipo'],
            'DESCRIPCION' => $_POST['DescripcionU'],
            'ID' => $_POST['ID']
        );
        if ($Mantenimiento->Actualizar_Mantenimiento($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;
        
    break;
}


?>