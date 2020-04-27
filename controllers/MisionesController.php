<?php

require ('../models/ModelMisiones.php');

$Misiones = new ModelMisiones();

switch ($_REQUEST['opcion']) {
    case 'Listar_Misiones':
        if ($datos = $Misiones->Listar_Misiones()) {
            $tabla = '<table class ="table  table-hover">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Lugar</th>
                    <th>Tipo de medicion</th>
                    <th>Fecha registro</th>
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
                <td><span class="badge badge-complete">' . $value['ESTADO'] . '</span></td>
                </tr>';
            }
            echo $tabla . $datosTabla . '</tbody></table>';
        }
    
   
}


?>