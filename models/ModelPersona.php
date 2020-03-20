<?php

require '../config/conexion.php';

class ModelPersona {

    private $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function ListarPersonasNaturales() {

        $query = ("SELECT PR.ID, TP.TIPO, TIPO_DOCUMENTO, NUMERO_DOCUMENTO, NOMBRE_1, NOMBRE_2,"
                . " APELLIDO_1, APELLIDO_2, TELEFONO_1, TELEFONO_2, DIRECCION, CORREO, ESTADO, "
                . "TIMESTAMP FROM PERSONA PR LEFT JOIN TIPO_PERSONA TP"
                . " ON PR.TIPO_PERSONA_ID = TP.ID WHERE PR.TIPO_PERSONA_ID = 1");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;

        $base->close();
    }

    public function ListarPersonasJuridicas() {

        $query = ("SELECT PR.ID, TP.TIPO, TIPO_DOCUMENTO, NUMERO_DOCUMENTO,"
                . " NOMBRE_1, NOMBRE_2, APELLIDO_1, APELLIDO_2, TELEFONO_1, TELEFONO_2, DIRECCION,"
                . " CORREO, ESTADO, TIMESTAMP FROM PERSONA PR "
                . "LEFT JOIN TIPO_PERSONA TP ON PR.TIPO_PERSONA_ID = TP.ID WHERE PR.TIPO_PERSONA_ID = 2");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;

        $base->close();
    }

    public function RegistrarPersonaNatural($datos) {
        $query = ("INSERT INTO PERSONA (TIPO_PERSONA_ID, ESTADO, CORREO, TIPO_DOCUMENTO, NUMERO_DOCUMENTO,"
                . " NOMBRE_1, NOMBRE_2, APELLIDO_1, APELLIDO_2, TELEFONO_1, TELEFONO_2, DIRECCION ) VALUES ("
                . ":TIPO_PERSONA_ID, :ESTADO: :CORREO, :TIPO_DOCUMENTO, :NUMERO_DOCUMENTO, :NOMBRE_1, :NOMBRE_2"
                . ":APELLIDO_1, :APELLIDO_2, :TELEFONO_1, :TELEFONO_2, :DIRECCION)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":TIPO_PERSONA_ID", $datos[""], PDO::PARAM_INT);
        $base->bindParam(":ESTADO", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":CORREO", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":TIPO_DOCUMENTO", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":NUMERO_DOCUMENTO", $datos[""], PDO::PARAM_INT);
        $base->bindParam(":NOMBRE_1", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":NOMBRE_2", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":APELLIDO_1", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":APELLIDO_2", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":TELEFONO_1", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":TELEFONO_2", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":DIRECCION", $datos[""], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        return false;

        $base->close();
    }

    public function RegistrarPersonaJuridica($datos) {
        $query = ("INSERT INTO PERSONA (TIPO_PERSONA_ID, ESTADO, CORREO, NIT, NOMBRE_EMPRESA,"
                . " REPRESENTANTE_EMPRESA, RAZON_SOCIAL, TIPO_ACTIVIDAD, REGIMEN, NATURALEZA, TELEFONO_1, TELEFONO_2, DIRECCION ) VALUES ("
                . ":TIPO_PERSONA_ID, :ESTADO: :CORREO, :NIT, :NOMBRE_EMPRESA, :REPRESENTANTE_EMPRESA, :RAZON_SOCIAL"
                . ":TIPO_ACTIVIDAD, :REGIMEN, :NATURALEZA, :TELEFONO_1, :TELEFONO_2, :DIRECCION)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":TIPO_PERSONA_ID", $datos[""], PDO::PARAM_INT);
        $base->bindParam(":ESTADO", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":CORREO", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":NIT", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":NOMBRE_EMPRESA", $datos[""], PDO::PARAM_INT);
        $base->bindParam(":REPRESENTANTE_EMPRESA", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":RAZON_SOCIAL", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":TIPO_ACTIVIDAD", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":REGIMEN", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":NATURALEZA", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":TELEFONO_1", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":TELEFONO_2", $datos[""], PDO::PARAM_STR);
        $base->bindParam(":DIRECCION", $datos[""], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        return false;

        $base->close();
    }

}
