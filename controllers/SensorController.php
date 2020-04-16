<?php

require ('../models/ModelSensor.php');

$Sensor = new ModelSensor;

switch ($_REQUEST["opcion"]) {
    
    case 'Select_Parametro':
        $datos = $Sensor->SelectParametro();
        if ($datos) {
            echo json_encode($datos);   
           
        }
        
        
    
        
    break;
}