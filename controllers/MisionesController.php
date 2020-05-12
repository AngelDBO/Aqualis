<?php

require ('../models/ModelMisiones.php');

$Misiones = new ModelMisiones();

switch ($_REQUEST['opcion']) {
    case 'Listar_Misiones':
        if ($datos = $Misiones->Listar_Misiones()) {
            $tabla = '<table id="bootstrap-data-table" class ="table  table-hover table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Lugar</th>
                    <th>Tipo de medicion</th>
                    <th>Fecha registro</th>
                    <th>Codigo mision</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>';
            $datosTabla = "";

            foreach ($datos as $key => $value) {
                $datosTabla = $datosTabla . '<tr>

                <td class="serial">' . $value['ID'] . '</td>
                <td class="serial">' . $value['LUGAR_MISION'] . '</td>
                <td class="serial">' . $value['TIPO_MEDICION'] . '</td>
                <td class="serial">' . $value['FECHA_INICIO'] . '</td>
                <td class="serial">' . $value['CODIGO_MISION'] . '</td>
                <td><span class="badge badge-pill badge-success">' . $value['ESTADO'] . '</span></td>
                </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }
}
?>