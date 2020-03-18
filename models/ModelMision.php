<?php

require_once '../config/conexion.php';

class ModeloMision{
    
    public $cnx;
    
    function __construct(){
        
        $this->cnx = conexion::conectar();
        
    }
    
    public function ListarMisiones(){
        $query =  ("SELECT ID, 
        CONFIGURACION_ID, 
        PERSONA_ID, 
        LUGAR_ID, 
        NOMBRE_MISION, 
        DESCRIPCION_MISION, 
        ESTADO FROM MISION");
        $result = $this->cnx->prepare($query);
        
        if ($result->execute()){
            if ($result->rowCount() > 0) {
                while ($fila = $result->fetch(PDO::FETCH_ASSOC)) {
                    $datos[] = $fila;
                }
                return $datos;
            }
        }
        echo "no haydatos";
        return false;
    }

    public function RegistrarMision(){
        
    }
}

?>