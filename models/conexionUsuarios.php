<?php

require('../../models/config.php');

class conectar {

    public static function conexion(){

    try{

    $conexion = new PDO(DB_HOST,DB_USUARIO,DB_CONTRA);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conexion->exec(DB_CHARSET);

    }catch(Exception $e){

    die('Error ' . $e->getMessage());

    echo "Linea del error " . $e->getLine();

    }

    return $conexion;

    }
}
?>