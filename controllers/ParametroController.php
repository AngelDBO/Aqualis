<?php

require ('../models/ModelParametro.php');

$parametro = new ModelParametro;

switch ($_REQUEST['opcion']) {
    case 'Listar_Parametros':
        if ($Datos = $parametro->ListarParametros()) {
            $tabla = '<table class = "table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Parametro</th>
                    <th>Valor Optimo</th>
                    <th>Valor Riesgo</th>
                    <th>Unidad</th>
                    <th>Fecha creacion</th>
                    <th>Actualizar</th>
                </tr>
            </thead>
            <tbody>';
            $datosTabla = "";
            
            foreach ($Datos as $key => $value) {
                $datosTabla = $datosTabla . '<tr>
                
                <td class="serial">' . $value['ID'] . '</td>
                <td class="serial">' . $value['NOMBRE_PARAMETRO'] . '</td>
                <td class="serial">' . $value['VALOR_OPTIMO'] . '</td>
                <td class="serial">' . $value['VALOR_RIESGO'] . '</td>
                <td class="serial">' . $value['UNIDAD'] . '</td>
                <td class="serial">' . $value['FECHA_CREACION'] . '</td>
                <td>
                <span class="btn btn-warning btn-sm"  onclick="ObtenerIDParametro(' . $value['ID'] . ');"
                data-toggle="modal" data-target="#P_Modal">
                <i class="fa fa-edit"></i>
                </span>
                </td>
                
                </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }
        
    break;

    case 'Registrar_Parametro':
        $datos = array(
            'NOMBRE_PARAMETRO' => $_POST['Nombre_Parametro'],
            'VALOR_OPTIMO' => $_POST['Valor_Optimo'],
            'VALOR_RIESGO' => $_POST['Valor_Riesgo'],
            'UNIDAD' => $_POST['Unidad']
        );

        if ($parametro->RegistrarParametro($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;
        
    break;

    case 'ObtenerIDParametro':
        if (isset($_POST['ID']) && !empty($_POST['ID'])) {
            $data = $parametro->ObtenerIDparametro($_POST['ID']);
            if ($data) {
                $list[] = array(
                    "ID" => $data['ID'],
                    "NOMBRE_PARAMETRO" => $data['NOMBRE_PARAMETRO'],
                    "VALOR_OPTIMO" => $data['VALOR_OPTIMO'],
                    "VALOR_RIESGO" => $data['VALOR_RIESGO'],
                    "UNIDAD" => $data['UNIDAD'],
                    "FECHA_CREACION" => $data['FECHA_CREACION']
                );
                echo json_encode($list);
            }
        }

    break;

    case 'Actualizar_Parametro':
        $datos = array(
            'NOMBRE_PARAMETRO' => $_POST['Nombre_ParametroU'],
            'VALOR_OPTIMO' => $_POST['Valor_OptimoU'],
            'VALOR_RIESGO' => $_POST['Valor_RiesgoU'],
            'UNIDAD' => $_POST['UnidadU'],
            'ID' => $_POST['ID']
        );


        if ($parametro->EditarParametro($datos)) {
            $response = 1;
        } else {
            $response = 2;
        }
        echo $response;
        
    break;
}
?>