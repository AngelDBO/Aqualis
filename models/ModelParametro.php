<?php

require '../config/conexion.php';

class ModelParametro {
    
    public $cnx;
    
    public function __construct() {
        
        $this->cnx = conexion::conectar();
    }
    
    public function ListarParametros() {
        $query = ("SELECT ID, NOMBRE_PARAMETRO, VALOR_OPTIMO, VALOR_RIESGO, UNIDAD, FECHA_CREACION FROM PARAMETRO");
        $base = $this->cnx->prepare($query);
        
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;
        
        $base->close();
    }
    
    public function RegistrarParametro($datos) {
        $query = ("INSERT INTO PARAMETRO (NOMBRE_PARAMETRO, VALOR_OPTIMO, VALOR_RIESGO, UNIDAD) VALUES (:NOMBRE_PARAMETRO, :VALOR_OPTIMO, :VALOR_RIESGO, :UNIDAD)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":NOMBRE_PARAMETRO", $datos['NOMBRE_PARAMETRO'], PDO::PARAM_STR);
        $base->bindParam(":VALOR_OPTIMO", $datos['VALOR_OPTIMO'], PDO::PARAM_INT);
        $base->bindParam(":VALOR_RIESGO", $datos['VALOR_RIESGO'], PDO::PARAM_INT);
        $base->bindParam(":UNIDAD", $datos['UNIDAD'], PDO::PARAM_STR);
        
        if ($base->execute()) {
            return true;
        }
        return false;
        
        $base->close();
    }
    
    public function ObtenerIDparametro($id){
        $query = ("SELECT ID, NOMBRE_PARAMETRO, VALOR_OPTIMO, VALOR_RIESGO, 
        UNIDAD, FECHA_CREACION FROM PARAMETRO WHERE ID = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ID", $id, PDO::PARAM_INT);
        
        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        } 
        return false;
        $base->close();
    }
    
    public function EditarParametro($datos){
        $query = ("UPDATE PARAMETRO SET NOMBRE_PARAMETRO = :NOMBRE_PARAMETRO,
        VALOR_OPTIMO = :VALOR_OPTIMO,
        VALOR_RIESGO = :VALOR_RIESGO,
        UNIDAD = :UNIDAD
        WHERE ID = :ID");
        $base = $this->cnx->prepare($query);                                  
        $base->bindParam(":NOMBRE_PARAMETRO", $datos['NOMBRE_PARAMETRO'], PDO::PARAM_STR);
        $base->bindParam(":VALOR_OPTIMO", $datos['VALOR_OPTIMO'], PDO::PARAM_INT);
        $base->bindParam(":VALOR_RIESGO", $datos['VALOR_RIESGO'], PDO::PARAM_INT);
        $base->bindParam(":UNIDAD", $datos['UNIDAD'], PDO::PARAM_STR);
        $base->bindParam(":ID", $datos['ID'], PDO::PARAM_INT);
        
        if($base->execute()){
            return true;
        }
        return false;
        $base->close();
        
    }
    
    
    
}

?>