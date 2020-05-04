<?php

require ('../models/ModelMision.php');

$mision = new ModeloMision;

switch ($_REQUEST['opcion']) {

    case 'Registrar_Mision':
        //Generar codigo de la mision
        $codigo = date('Y:m:d:h:s:');
        $date = explode(":", $codigo);
        $codigo_mision = "MS".$date[0]."".$c2 = $date[1]."".$c3 = $date[2]."".$c4 = $date[3]."".$c5 = $date[4];
       
        $datos = array(
         'USUARIO_ID' => $_POST['usuario_mision'],
         'CODIGO_MISION' => $codigo_mision,
         'NOMBRE_MISION' => $_POST['Nombre_Mision'],
         'LUGAR_MISION' => $_POST['Lugar_Mision'],
         'TIPO_MEDICION' => $_POST['Tipo_Medicion'],
         'DESCRIPCION_MISION' => $_POST['Descripcion_mision'],
         'LONGITUD' => $_POST['Longitud'],
         'LATITUD' => $_POST['Latitud'],
         'FECHA_INICIO' => $_POST['Fecha_inicio']
        );

        if($mision->RegistrarMision($datos)){
            $response = 1;
        }else{
            $response = 2;
        }
        echo $response; 

    break;
}

?>