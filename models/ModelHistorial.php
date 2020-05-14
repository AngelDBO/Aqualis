<?php

require '../config/conexion.php';

class ModelParametro {
    
    public $cnx;
    
    public function __construct() {
        
        $this->cnx = conexion::conectar();
    }
}


?>