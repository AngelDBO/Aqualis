<?php

require '../config/conexion.php';

class ModelPersona {

    private $cnx;

    public function __construct() {
        $this->cnx = conexion::conectar();
    }

    public function ListarPersonasNaturales() {

        $query = ("SELECT ID, TIPO_DOCUMENTO, NUMERO_DOCUMENTO, NOMBRE_1, NOMBRE_2, APELLIDO_1, APELLIDO_2, TELEFONO_1, TELEFONO_2, DIRECCION, CORREO, TIMESTAMP, ESTADO FROM PERSONA WHERE TIPO_PERSONA = 'NATURAL'");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;

        $base->close();
    }

    public function ListarPersonasJuridicas() {

        $query = ("SELECT ID, TIPO_DOCUMENTO, NIT, NOMBRE_EMPRESA, REPRESENTANTE_EMPRESA, RAZON_SOCIAL, TIPO_ACTIVIDAD, REGIMEN, NATURALEZA, TELEFONO_1, TELEFONO_2, DIRECCION, CORREO, TIMESTAMP, ESTADO FROM PERSONA WHERE TIPO_PERSONA = 'JURIDICA'");
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;

        $base->close();
    }

    public function RegistrarPersonaNatural($datos) {
        $query = ("INSERT INTO PERSONA (TIPO_PERSONA, CORREO, TIPO_DOCUMENTO, NUMERO_DOCUMENTO, NOMBRE_1, NOMBRE_2, APELLIDO_1, APELLIDO_2, TELEFONO_1, TELEFONO_2, DIRECCION)
                  VALUES (:TIPO_PERSONA, :CORREO, :TIPO_DOCUMENTO, :NUMERO_DOCUMENTO, :NOMBRE_1, :NOMBRE_2, :APELLIDO_1, :APELLIDO_2, :TELEFONO_1, :TELEFONO_2, :DIRECCION)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":TIPO_PERSONA", $datos["TIPO_PERSONA"], PDO::PARAM_STR);
        $base->bindParam(":CORREO", $datos["CORREO"], PDO::PARAM_STR);
        $base->bindParam(":TIPO_DOCUMENTO", $datos["TIPO_DOCUMENTO"], PDO::PARAM_STR);
        $base->bindParam(":NUMERO_DOCUMENTO", $datos["NUMERO_DOCUMENTO"], PDO::PARAM_INT);
        $base->bindParam(":NOMBRE_1", $datos["NOMBRE_1"], PDO::PARAM_STR);
        $base->bindParam(":NOMBRE_2", $datos["NOMBRE_2"], PDO::PARAM_STR);
        $base->bindParam(":APELLIDO_1", $datos["APELLIDO_1"], PDO::PARAM_STR);
        $base->bindParam(":APELLIDO_2", $datos["APELLIDO_2"], PDO::PARAM_STR);
        $base->bindParam(":TELEFONO_1", $datos["TELEFONO_1"], PDO::PARAM_INT);
        $base->bindParam(":TELEFONO_2", $datos["TELEFONO_2"], PDO::PARAM_INT);
        $base->bindParam(":DIRECCION", $datos["DIRECCION"], PDO::PARAM_STR);
        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
    }

    public function RegistrarPersonaJuridica($datos) {
        $query = ("INSERT INTO PERSONA (TIPO_DOCUMENTO, TIPO_PERSONA, CORREO, NIT, NOMBRE_EMPRESA, REPRESENTANTE_EMPRESA, RAZON_SOCIAL, TIPO_ACTIVIDAD, REGIMEN, NATURALEZA, TELEFONO_1, TELEFONO_2, DIRECCION )
                  VALUES(:TIPO_DOCUMENTO, :TIPO_PERSONA, :CORREO, :NIT, :NOMBRE_EMPRESA, :REPRESENTANTE_EMPRESA, :RAZON_SOCIAL, :TIPO_ACTIVIDAD, :REGIMEN, :NATURALEZA, :TELEFONO_1, :TELEFONO_2, :DIRECCION)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":TIPO_DOCUMENTO", $datos["TIPO_DOCUMENTO"], PDO::PARAM_STR);
        $base->bindParam(":TIPO_PERSONA", $datos["TIPO_PERSONA"], PDO::PARAM_STR);
        $base->bindParam(":CORREO", $datos["CORREO"], PDO::PARAM_STR);
        $base->bindParam(":NIT", $datos["NIT"], PDO::PARAM_INT);
        $base->bindParam(":NOMBRE_EMPRESA", $datos["NOMBRE_EMPRESA"], PDO::PARAM_STR);
        $base->bindParam(":REPRESENTANTE_EMPRESA", $datos["REPRESENTANTE_EMPRESA"], PDO::PARAM_STR);
        $base->bindParam(":RAZON_SOCIAL", $datos["RAZON_SOCIAL"], PDO::PARAM_STR);
        $base->bindParam(":TIPO_ACTIVIDAD", $datos["TIPO_ACTIVIDAD"], PDO::PARAM_STR);
        $base->bindParam(":REGIMEN", $datos["REGIMEN"], PDO::PARAM_STR);
        $base->bindParam(":NATURALEZA", $datos["NATURALEZA"], PDO::PARAM_STR);
        $base->bindParam(":TELEFONO_1", $datos["TELEFONO_1"], PDO::PARAM_INT);
        $base->bindParam(":TELEFONO_2", $datos["TELEFONO_2"], PDO::PARAM_INT);
        $base->bindParam(":DIRECCION", $datos["DIRECCION"], PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        return false;

        $base->close();
    }

    public function EditarPersonaNatural($datos) {
        $query = ("UDPATE PERSONA SET TIPO_DOCUMENTO = :TIPO_DOCUMENTO,
                                      NUMERO_DOCUMENTO = :NUMERO_DOCUMENTO,
                                      NOMBRE_1 = :NOMBRE_1,
                                      NOMBRE_2 = :NOMBRE_2,
                                      APELLIDO_1 = :APELLIDO_1,
                                      APELLIDO_2 = :APELLIDO_2,
                                      TELEFONO_1 = :TELEFONO_1,
                                      TELEFONO_2 = :TELEFONO_2,
                                      DIRECCION = :DIRECCION,
                                      CORREO = :CORREO,
                                      ESTADO = :ESTADO
                                      WHERE ID = :ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":TIPO_DOCUMENTO", $datos['TIPO_DOCUMENTO'], PDO::PARAM_STR);
        $base->bindParam(":NUMERO_DOCUMENTO", $datos['NUMERO_DOCUMENTO'], PDO::PARAM_INT);
        $base->bindParam(":NOMBRE_1", $datos['NOMBRE_1'], PDO::PARAM_STR);
        $base->bindParam(":NOMBRE_2", $datos['NOMBRE_2'], PDO::PARAM_STR);
        $base->bindParam(":APELLIDO_1", $datos['APELLIDO_1'], PDO::PARAM_STR);
        $base->bindParam(":APELLIDO_2", $datos['APELLIDO_2'], PDO::PARAM_INT);
        $base->bindParam(":TELEFONO_1", $datos['TELEFONO_1'], PDO::PARAM_INT);
        $base->bindParam(":TELEFONO_2", $datos['TELEFONO_2'], PDO::PARAM_STR);
        $base->bindParam(":DIRECCION", $datos['DIRECCION'], PDO::PARAM_STR);
        $base->bindParam(":CORREO", $datos['CORREO'], PDO::PARAM_STR);
        $base->bindParam(":ESTADO", $datos['ESTADO'], PDO::PARAM_STR);
        $base->bindParam(":ID", $datos['ID'], PDO::PARAM_INT);

        if ($base->execute()) {
            return true;
        }
        return false;

        $base->close();
    }

    public function ObtenerDatoNaturalID($id) {
        $query = ("SELECT ID, TIPO_DOCUMENTO, NUMERO_DOCUMENTO, NOMBRE_1, NOMBRE_2, APELLIDO_1, APELLIDO_2, TELEFONO_1, TELEFONO_2, DIRECCION, CORREO, TIMESTAMP, ESTADO FROM PERSONA WHERE TIPO_PERSONA = 'NATURAL' AND ID=:ID");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ID", $id, PDO::PARAM_INT);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

}
