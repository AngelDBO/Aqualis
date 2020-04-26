<?php

require_once '../config/conexion.php';

class ModelSensor {

    public $cnx;

    function __construct() {

        $this->cnx = conexion::conectar();
    }

    public function Registrar_Sensor($datos) {
        $query = ("INSERT INTO SENSOR (NOMBRE_SENSOR, RANGO_MEDICION, PRECISION_MEDICION, ESTADO_SENSOR, PARAMETRO_ID ) VALUES(
            :NOMBRE_SENSOR, :RANGO_MEDICION, :PRECISION_MEDICION, :ESTADO_SENSOR, :PARAMETRO_ID)");
        $base = $this->cnx->prepare($query);


        $base->bindParam(":NOMBRE_SENSOR", $datos['NOMBRE_SENSOR'], PDO::PARAM_STR);
        $base->bindParam(":RANGO_MEDICION", $datos['RANGO_MEDICION'], PDO::PARAM_STR);
        $base->bindParam(":PRECISION_MEDICION", $datos['PRECISION_MEDICION'], PDO::PARAM_STR);
        $base->bindParam(":ESTADO_SENSOR", $datos['ESTADO_SENSOR'], PDO::PARAM_STR);
        $base->bindParam(":PARAMETRO_ID", $datos['PARAMETRO_ID'], PDO::PARAM_INT);
        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
    }

    public function Listar_Sensores() {
        $query = ("SELECT S.ID,
                          P.NOMBRE_PARAMETRO,
                          S.NOMBRE_SENSOR,
                          S.RANGO_MEDICION,
                          S.PRECISION_MEDICION,
                          S.ESTADO_SENSOR
                          FROM SENSOR S INNER JOIN PARAMETRO P
                          ON S.PARAMETRO_ID = P.ID");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

    public function ObtenerID($id) {
        $query = ("SELECT * FROM SENSOR WHERE ID = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ID", $id, PDO::PARAM_INT);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

    public function SelectParametro() {
        $query = ("SELECT ID, NOMBRE_PARAMETRO FROM PARAMETRO");
        $base = $this->cnx->prepare($query);

        if ($base->execute()) {

            if ($base->rowCount() > 0) {
                while ($fila = $base->fetch(PDO::FETCH_ASSOC)) {
                    $datos[] = $fila;
                }
                return $datos;
            }
        }
        return false;
        $base->close();
    }

    function Actualizar_Sensor($datos) {
        $query = ("UPDATE SENSOR SET  NOMBRE_SENSOR = :NOMBRE_SENSOR,
                                      RANGO_MEDICION = :RANGO_MEDICION,
                                      PRECISION_MEDICION = :PRECISION_MEDICION,
                                      ESTADO_SENSOR = :ESTADO_SENSOR,
                                      PARAMETRO_ID = :PARAMETRO_ID
                                      WHERE ID = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":NOMBRE_SENSOR", $datos['NOMBRE_SENSOR'], PDO::PARAM_STR);
        $base->bindParam(":RANGO_MEDICION", $datos['RANGO_MEDICION'], PDO::PARAM_STR);
        $base->bindParam(":PRECISION_MEDICION", $datos['PRECISION_MEDICION'], PDO::PARAM_STR);
        $base->bindParam(":ESTADO_SENSOR", $datos['ESTADO_SENSOR'], PDO::PARAM_STR);
        $base->bindParam(":PARAMETRO_ID", $datos['PARAMETRO_ID'], PDO::PARAM_INT);
        $base->bindParam(":ID", $datos['ID'], PDO::PARAM_INT);
        if ($base->execute()) {
            return true;
        } else {
            return false;
        }
        $base->close();
    }

}
