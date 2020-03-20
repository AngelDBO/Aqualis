<?php

require '../config/conexion.php';

class ModelParametro {

    public $cnx;

    public function __construct() {

        $this->cnx = conexion::conectar();
    }

    public function ListarParametros() {
        $query = ("SELECT ID, NOMBRE_PARAMETRO, VALOR_OPTIMO, VALOR_RIESGO, FECHA_CREACION FROM PARAMETRO");
        $base = $this->cnx->prepare($query);

        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;

        $base->close();
    }

    public function RegistrarParametro($datos) {
        $query = ("INSERT INTO PARAMETRO (NOMBRE_PARAMETRO, VALOR_OPTIMO, VALOR_RIESGO) VALUES (:NOMBRE_PARAMETRO, :VALOR_OPTIMO, :VALOR_RIESGO)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":NOMBRE_PARAMETRO", $datos['NOMBRE_PARAMETRO'], PDO::PARAM_STR);
        $base->bindParam(":VALOR_OPTIMO", $datos['VALOR_OPTIMO'], PDO::PARAM_INT);
        $base->bindParam(":VALOR_RIESGO", $datos['VALOR_RIESGO'], PDO::PARAM_INT);

        if ($base->execute()) {
            return true;
        }
        return false;

        $base->close();
    }

}

?>