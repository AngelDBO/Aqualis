<?php

require_once '../config/conexion.php';

class ModelMantenimiento {

    public $cxn;

    public function __construct() {

        $this->cnx = conexion::conectar();
    }

    public function Registrar_Mantenimiento($datos) {
        $query = ("INSERT INTO MANTENIMIENTO_SENSOR (SENSOR_ID, FECHA_MANTENIMIENTO, TIPO_MANTENIMIENTO, DESCRIPCION) VALUES (
                                                     :SENSOR_ID, :FECHA_MANTENIMIENTO, :TIPO_MANTENIMIENTO, :DESCRIPCION)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":SENSOR_ID", $datos['SENSOR_ID'], PDO::PARAM_INT);
        $base->bindParam(":FECHA_MANTENIMIENTO", $datos['FECHA_MANTENIMIENTO'], PDO::PARAM_STR);
        $base->bindParam(":TIPO_MANTENIMIENTO", $datos['TIPO_MANTENIMIENTO'], PDO::PARAM_STR);
        $base->bindParam(":DESCRIPCION", $datos['DESCRIPCION'], PDO::PARAM_STR);
        if ($base->execute()) {
            return true;
        } else {
            return false;
        }
        $base->close();
    }

    public function Select_sensor() {
        $query = ("SELECT DISTINCT ID, NOMBRE_SENSOR FROM SENSOR");
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

    public function Listar_Mantenimiento() {
        $query = ("SELECT MS.ID, S.NOMBRE_SENSOR, MS.FECHA_MANTENIMIENTO, MS.TIPO_MANTENIMIENTO, MS.DESCRIPCION, MS.TIMESTAMP FROM MANTENIMIENTO_SENSOR MS INNER JOIN SENSOR S ON MS.SENSOR_ID = S.ID");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
        $base->close();
    }

    public function Obtener_ID($id) {
        $query = ("SELECT * FROM MANTENIMIENTO_SENSOR WHERE ID = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ID", $id, PDO::PARAM_INT);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

    public function Actualizar_Mantenimiento($datos) {
        $query = ("UPDATE MANTENIMIENTO_SENSOR SET SENSOR_ID = :SENSOR_ID,
                                                   FECHA_MANTENIMIENTO = :FECHA_MANTENIMIENTO,
                                                   TIPO_MANTENIMIENTO = :TIPO_MANTENIMIENTO,
                                                   DESCRIPCION = :DESCRIPCION WHERE
                                                   ID = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":SENSOR_ID", $datos['SENSOR_ID'], PDO::PARAM_INT);
        $base->bindParam(":FECHA_MANTENIMIENTO", $datos['FECHA_MANTENIMIENTO'], PDO::PARAM_STR);
        $base->bindParam(":TIPO_MANTENIMIENTO", $datos['TIPO_MANTENIMIENTO'], PDO::PARAM_STR);
        $base->bindParam(":DESCRIPCION", $datos['DESCRIPCION'], PDO::PARAM_STR);
        $base->bindParam(":ID", $datos['ID'], PDO::PARAM_INT);
        if ($base->execute()) {
            return true;
        } else {
            return false;
        }
        $base->close();
    }

}
