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
        $sql =$this->db->prepare("SELECT COD_USUARIO,USUARIO,CONTRASENA,ID_PERFIL,NOMBRE_USUARIO,APELLIDO_USUARIO,ESTADO FROM 1_USUARIO WHERE USUARIO = :usu AND CONTRASENA=SHA(:pass)");
        $sql->bindParam(':usu',$usu);
        $sql->bindParam(':pass',$pass);
        $sql->execute();

        foreach ($sql as $res) {
            $this->usuario[] = $res;
        }
        $db= null;
        return $this->usuario;
    }
}

?>