<?php

require ('../models/ModelPersona.php');

$Persona = new ModelPersona;


switch ($_REQUEST["opcion"]) {
    case 'Registrar_Persona_Natural':

        $datos = array(
            'TIPO_PERSONA' => 'NATURAL',
            'CORREO' => $_POST['Correo'],
            'TIPO_DOCUMENTO' => $_POST['Tipo_Documento'],
            'NUMERO_DOCUMENTO' => $_POST['Numero_Documento'],
            'NOMBRE_1' => $_POST['Primer_Nombre'],
            'NOMBRE_2' => $_POST['Segundo_Nombre'],
            'APELLIDO_1' => $_POST['Primer_Apellido'],
            'APELLIDO_2' => $_POST['Segundo_Apellido'],
            'TELEFONO_1' => $_POST['Telefono_1'],
            'TELEFONO_2' => $_POST['Telefono_2'],
            'DIRECCION' => $_POST['Direccion']
        );

        if (!empty($datos)) {
            if ($Persona->RegistrarPersonaNatural($datos)) {
                $response = 1;
            } else {
                $response = 2;
            }
        }
        echo $response;

        break;
}
