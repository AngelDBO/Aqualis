<?php

require ('../models/ModelParametro.php');

$parametro = new ModelParametro;

if($datos = $parametro->ListarParametros()){
   
    echo json_encode($datos, JSON_PRETTY_PRINT);
}

?>