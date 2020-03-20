<?php

require ('../config/conexion.php');

class ModelUsuario {

    public $cnx;

    public function __construct() {

        $this->cnx = conexion::conectar();
    }

    public function RegistrarUsuario($datos) {
        $query = ("INSERT INTO PERFIL (ROL, USUARIO, PASSWORD) VALUES (:ROL, :USUARIO, :PASSWORD)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":ROL", $datos['ROL'], PDO::PARAM_STR);
        $base->bindParam(":USUARIO", $datos['USUARIO'], PDO::PARAM_STR);
        $pass = password_hash($datos['PASSWORD'], PASSWORD_DEFAULT);
        $base->bindParam(":PASSWORD", $pass, PDO::PARAM_STR);

        if ($base->execute()) {
            return true;
        }
        return false;

        $base->close();
    }

    public function ValidarUsuario($correo, $clave) {
        $query = ("SELECT PF.ID, PF.ROL, PF.USUARIO, PF.PASSWORD, PF.TIMESTAMP AS FECHA_CREACION, PS.CORREO
                       FROM PERFIL PF INNER JOIN PERSONA PS WHERE PS.CORREO = :CORREO");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":CORREO", $correo);
        $base->execute();
        $fila = $base->fetch();

        if (password_verify($clave, $fila['PASSWORD'])) {
            return true;
        }
        return false;


        $base->close();
    }

    public function DesactivarUsuario($datos) {

    }

}

?>