<?php 
require_once '../models/ModelGraficas.php';
$grafica = new Graficas();
switch ($_REQUEST['opcion']) {
	
	case 'Grafica':
	$id = $_POST['id'];
	$datos = $grafica->ObtenerDatos($id);
	foreach ($datos as $value) {
		$y[] = $value['PH'];
		$x[] = $value['HORA'];
		$tds[] = $value['TDS'];
		$temp[] = $value['TEMPERATURA'];
		$turbidez[] = $value['TURBIDEZ'];
		$ec[] = $value['EC'];
		$orp[] = $value['REDOX'];
	}
	echo json_encode($y);
	echo "/";
	echo json_encode($x);
	echo "/";
	echo json_encode($tds);
	echo "/";
	echo json_encode($temp);
	echo "/";
	echo json_encode($turbidez);
	echo "/";
	echo json_encode($ec);
	echo "/";
	echo json_encode($orp);
	break;

	case 'ListarNombre':
	$datos = $grafica->ListarNombre();
	if ($datos) {
            for ($i = 0; $i < count($datos); $i++) {
                $list[] = array(
                    "0" => $datos[$i]['ID'],
                    "1" => $datos[$i]['NOMBRE_MISION']
                );
            }
            echo json_encode($list);
        }
	break;
}

?>