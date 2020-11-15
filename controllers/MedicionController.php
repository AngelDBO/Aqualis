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

    case 'RegistrarDatos':
    $lecturas = [
        'idmision' => $_POST['idmision'],
        'Turbidez' => $_POST['turbidez'],
        'pH' => $_POST['ph'],
        'Temperatura' => $_POST['temperatura'],
        'TDS' => $_POST['tds'],
        'Latitud' => $_POST['latitud'],
        'Longitud' => $_POST['longitud'],
        'Redox' => (isset($_POST['Redox'])) ? $_POST['Redox'] : '0',
        'ConductividadElectrica' => (isset($_POST['ec'])) ? $_POST['Redox'] : '0'
    ];
    if($Medicion->RegistarMediciones($lecturas)){
        $response = '1';
    }else{
        $response = '0';
    }
    echo $response;
    break;

    case 'LiveData':
    $datos = $Medicion->ObtenerCodigoMision();
    $id = $datos['ID'];
    $data = $Medicion->DataLive($id);
    $results = array(
        "sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
        "aaData"=>$data);
    echo json_encode($results);
    break;

}
