<?php

require_once '../config/conexion.php';

class ModelSensor{
    
    public $cnx;
    
    function __construct(){
        
        $this->cnx = conexion::conectar();
        
    }

    public function SelectParametro(){
        $query = ("SELECT NOMBRE_PARAMETRO FROM PARAMETRO");
        $base = $this->cnx->prepare($query);
        
        if($base->execute()){
            if ($base->rowCount() > 0) {
                while ($fila = $base->fetchALL(PDO::FETCH_ASSOC)) {
                    $datos = $fila;
                }
                return $datos;
            }
        }
        return false;
        $base->close();
    }
}
 