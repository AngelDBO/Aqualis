<?php

require ('../models/ModelPersona.php');

$Persona = new ModelPersona;

$datos = array(
    'TIPO_PERSONA' => 'NATURAL',
    'ESTADO' => 'ACTIVO',
    'CORREO' => 'PRUEBA12@HOTMAIL.COM',
    'TIPO_DOCUMENTO' => 'CEDULA CIUDADANIA',
    'NUMERO_DOCUMENTO' => '1306794344',
    'NOMBRE_1' => 'ANGEFL',
    'NOMBRE_2' => 'DANIELF',
    'APELLIDO_1' => 'BEDOYAF',
    'APELLIDO_2' => 'ORTEGAF',
    'TELEFONO_1' => '3107383191',
    'DIRECCION' => 'FFDG 13 #10B-23'
);

if ($Persona->RegistrarPersonaNatural($datos)) {
    echo 'Ok';
} else {
    echo 'MAl';
}
