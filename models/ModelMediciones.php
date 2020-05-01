<?php

require_once '../config/conexion.php';

class ModeloMediciones {

    public $cnx;

    function __construct() {

        $this->cnx = conexion::conectar();
    }

    public function ObtenerCodigoMision() {
        $query = ("SELECT ID, CODIGO_MISION FROM MISION WHERE TIMESTAMP = ( SELECT MAX(TIMESTAMP) FROM MISION )");
        $base = $this->cnx->prepare($query);

        if ($base->execute()) {
            return $base->fetch(PDO::FETCH_ASSOC);
        }
        return false;
        $base->close();
    }
}

?>