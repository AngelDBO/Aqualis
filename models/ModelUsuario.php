<?php

require ('../config/conexion.php');

class ModelUsuario {

    public $cnx;

    public function __construct() {

        $this->cnx = conexion::conectar();
    }

    public function ListarUsuarios(){
        $query = ("SELECT ID, NOMBRE, APELLIDO, ROL, USUARIO, CORREO, ESTADO, TIMESTAMP FROM USUARIO");
        $base = $this->cnx->prepare($query);
        
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        } 
        return false;
        $base->close();
    }

    public function RegistrarUsuario($datos) {
        $query = ("INSERT INTO USUARIO (NOMBRE, APELLIDO, ROL, USUARIO, PASSWORD, CORREO, ESTADO) VALUES (:NOMBRE, :APELLIDO, :ROL, :USUARIO, :PASSWORD, :CORREO, :ESTADO)");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":NOMBRE", $datos['NOMBRE'], PDO::PARAM_STR);
        $base->bindParam(":APELLIDO", $datos['APELLIDO'], PDO::PARAM_STR);
        $base->bindParam(":ROL", $datos['ROL'], PDO::PARAM_STR);
        $base->bindParam(":USUARIO", $datos['USUARIO'], PDO::PARAM_STR);
        $pass = password_hash($datos['PASSWORD'], PASSWORD_DEFAULT);
        $base->bindParam(":PASSWORD", $pass, PDO::PARAM_STR);
        $base->bindParam(":CORREO", $datos['CORREO'], PDO::PARAM_STR);
        $base->bindParam(":ESTADO", $datos['ESTADO'], PDO::PARAM_STR);
        if ($base->execute()) {
            return true;
        }
        return false;
        $base->close();
    }

    public function ValidarUsuario($correo, $clave) {
        $query = ("SELECT CORREO, PASSWORD FROM USUARIO WHERE CORREO = :CORREO");
        $base = $this->cnx->prepare($query);
        $base->bindParam(":CORREO", $correo);
        $base->execute();
        $fila = $base->fetch();

        if (password_verify($clave, $fila['PASSWORD'])) {
            return true;
        }
        return false;
        $fila=null;
        $base->close();
    }

    public function DesactivarUsuario($datos) {

    }

}

?>