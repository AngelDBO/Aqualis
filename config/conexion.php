<?php

class conexion{
    
    static function conectar(){
        
        try {
            require ('../config/config.php');
            $base = new PDO(DNS, USER, PASSWORD);
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $base;
        } catch (PDOException $e) {
            die('Error en la conexion: '.$e->getMessage());
        }   
    }  
}


?> 