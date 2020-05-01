<?php

require ('../models/ModelMediciones.php');

$Medicion = new ModeloMediciones();

switch ($_REQUEST['opcion']) {
    case 'Select_Codigo':
        $datos = $Medicion->ObtenerCodigoMision();
        
        if ($datos) {
            $list[] = array(
                "ID" => $datos['ID'],
                "CODIGO_MISION" => $datos['CODIGO_MISION']          
            );
            echo json_encode($list);
        }
        
    break;
}
