<?php
require ('../config/conexion.php');

class ModelMisiones{

    public $cnx;

    public function __construct() {

        $this->cnx = conexion::conectar();
    }

    public function Listar_Misiones(){
        $query = "SELECT * FROM MISION";
        $base = $this->cnx->prepare($query);
        if ($base->execute()) {
            return $base->fetchALL(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }
    
}


?>