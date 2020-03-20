<?php

require ('../models/ModelPersona.php');

$Persona = new ModelPersona;

$datos = array(
    'TIPO_PERSONA_ID' => $_POST[''],
    'ESTADO' => $_POST[''],
    'CORREO' => $_POST[''],
    'TIPO_DOCUMENTO' => $_POST[''],
    'NUMERO_DOCUMENTO' => $_POST[''],
    'NOMBRE_1' => $_POST[''],
    'NOMBRE_2' => $_POST[''],
    'APELLIDO_1' => $_POST[''],
    'APELLIDO_2' => $_POST[''],
    'TELEFONO_1' => $_POST[''],
    'TELEFONO_2' => $_POST[''],
    'DIRECCION' => $_POST[''],
);

if ($datos = $Persona->ListarPersonasJuridicas()) {
    echo '<pre>';
    echo json_encode($datos, JSON_PRETTY_PRINT);
}