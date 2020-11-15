<?php

require_once '../config/conexion.php';

class ModeloMision{
    
    public $cnx;
    
    function __construct(){
        $this->cnx = conexion::conectar();    
    }
    
    public function RegistrarMision($datos){
       $query = ("INSERT INTO MISION (CODIGO_MISION, USUARIO_ID, NOMBRE_MISION, LUGAR_MISION, TIPO_MEDICION, DESCRIPCION_MISION, LONGITUD, LATITUD, FECHA_INICIO) 
       VALUES(:CODIGO_MISION, :USUARIO_ID, :NOMBRE_MISION, :LUGAR_MISION, :TIPO_MEDICION, :DESCRIPCION_MISION, :LONGITUD, :LATITUD, :FECHA_INICIO)"); 
       $base = $this->cnx->prepare($query);
       $base->bindParam(":CODIGO_MISION", $datos['CODIGO_MISION'], PDO::PARAM_STR);
       $base->bindParam(":USUARIO_ID", $datos['USUARIO_ID'], PDO::PARAM_INT);
       $base->bindParam(":NOMBRE_MISION", $datos['NOMBRE_MISION'], PDO::PARAM_STR);
       $base->bindParam(":LUGAR_MISION", $datos['LUGAR_MISION'], PDO::PARAM_STR);
       $base->bindParam(":TIPO_MEDICION", $datos['TIPO_MEDICION'], PDO::PARAM_STR);
       $base->bindParam(":DESCRIPCION_MISION", $datos['DESCRIPCION_MISION'], PDO::PARAM_STR);
       $base->bindParam(":LONGITUD", $datos['LONGITUD'], PDO::PARAM_STR);
       $base->bindParam(":LATITUD",$datos['LATITUD'], PDO::PARAM_STR);
       $base->bindParam(":FECHA_INICIO", $datos['FECHA_INICIO'], PDO::PARAM_STR);

       if($base->execute()){
            return true;
       }else{
           return false;
       }
       $base->close();
    }

    public function Listar_Misiones(){
        $query = 'SELECT MS.NOMBRE_MISION, MS.LUGAR_MISION, CONCAT(MS.LONGITUD,".", MS.LATITUD) AS COORDENADAS, MS.TIPO_MEDICION, MS.DESCRIPCION_MISION, MS.FECHA_INICIO, MS.ESTADO, US.NOMBRE, MS.TIMESTAMP FROM MISION MS INNER JOIN USUARIO US ON MS.USUARIO_ID = US.ID';
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }

    public function EstablecerEstado($datos){
      $query = 'UPDATE MISION SET ESTADO = :estado WHERE ID = :id';
      $base = $this->cnx->prepare($query);
      $base->bindParam(":estado", $datos['ESTADO'], PDO::PARAM_STR);
      $base->bindParam(":id", $datos['ID'], PDO::PARAM_INT);

      if($base->execute()){
        return true;
      }
      return false;

    }

    public function VerificarEstado(){
      $query = $query = 'SELECT MAX(ESTADO) as Estado FROM MISION';
      $base = $this->cnx->prepare($query);
      if ($base->execute()) {
        return $base->fetch(PDO::FETCH_ASSOC);
      }

    }
}

?>