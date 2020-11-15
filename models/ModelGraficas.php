<?php 
require_once '../config/conexion.php';

class Graficas{
	public $cnx;

	public function __construct(){
		$this->cnx = conexion::conectar();
	}

	public function ObtenerDatos($id){
		$query = 'SELECT DT.TEMPERATURA, DT.PH, DT.TURBIDEZ,DT.TDS, DT.EC, DT.REDOX, DATE(DT.FECHA_MEDICION) AS FECHA, TIME(DT.FECHA_MEDICION) AS HORA FROM DETALLE_MISION DT INNER JOIN MISION MS ON DT.MISION_ID = MS.ID WHERE MS.ID = :ID ';
		$base = $this->cnx->prepare($query);
		$base->bindParam(":ID", $id, PDO::PARAM_INT);
		if($base->execute()){
			return $base->fetchALL(PDO::FETCH_ASSOC);
		}
		return false;
	}

	public function ListarNombre(){
		$query = 'SELECT ID, NOMBRE_MISION FROM MISION';
		$base = $this->cnx->prepare($query);
		if($base->execute()){
			return $base->fetchALL(PDO::FETCH_ASSOC);
		}
		return false;
	}
}
