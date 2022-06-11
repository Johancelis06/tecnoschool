<?php

require_once('../models/conexion.php');

class login {

    private $db;
    private $usuario;

    public function __construct() {

        $this->usuario = array();
        $this->db=Conectar::conexion();
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getRoute($usu,$pass){

        self::setNames();
        $sql = "SELECT COD_USUARIO,USUARIO,CONTRASENA,ID_PERFIL,NOMBRE_USUARIO,APELLIDO_USUARIO FROM 1_USUARIO WHERE USUARIO = '$usu' AND CONTRASENA=SHA('$pass')";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        $conexion= null;
        return $this->usuario;
    }
}

?>