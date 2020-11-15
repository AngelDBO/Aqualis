<?php

require_once '../config/conexion.php';

class ModeloMediciones {

    public $cnx;

    function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function ObtenerCodigoMision() {
        $query = ("SELECT ID, CODIGO_MISION, ESTADO FROM MISION WHERE TIMESTAMP = ( SELECT MAX(TIMESTAMP) FROM MISION ) AND ESTADO = 'Pendiente'");
        $base = $this->cnx->prepare($query);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

    public function RegistarMediciones($datos){
        $query = 'INSERT INTO detalle_mision (MISION_ID, TEMPERATURA, PH, TURBIDEZ, EC, TDS, REDOX, LATITUD, LONGITUD) VALUES (:MISION_ID, :TEMPERATURA, :PH, :TURBIDEZ, :EC, :TDS, :REDOX, :LATITUD, :LONGITUD)';
        $base = $this->cnx->prepare($query);
        $base->bindParam(':MISION_ID', $datos['idmision'], PDO::PARAM_INT);
        $base->bindParam(':TURBIDEZ', $datos['Turbidez'], PDO::PARAM_STR);
        $base->bindParam(':PH', $datos['pH'], PDO::PARAM_STR);
        $base->bindParam(':TEMPERATURA', $datos['Temperatura'], PDO::PARAM_STR);
        $base->bindParam(':TDS', $datos['TDS'], PDO::PARAM_STR);
        $base->bindParam(':LATITUD', $datos['Latitud'], PDO::PARAM_STR);
        $base->bindParam(':LONGITUD', $datos['Longitud'], PDO::PARAM_STR);
        $base->bindParam(':EC', $datos['ConductividadElectrica'], PDO::PARAM_STR);
        $base->bindParam(':REDOX', $datos['Redox'], PDO::PARAM_STR);

        if($base->execute()){
            return true;
        }{
            return false;
        }   
    }

    public function DataLive($id){
        $query = 'SELECT * FROM detalle_mision WHERE MISION_ID = :idMision';
        $base = $this->cnx->prepare($query);
        $base->bindParam("idMision", $id, PDO::PARAM_INT);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }
}

?>