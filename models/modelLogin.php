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
        if (count($this->usuario) > 0) {

            session_start();

            $name = $this->usuario[0]['NOMBRE_USUARIO']." ".$this->usuario[0]['APELLIDO_USUARIO'];
            $id_usr = $this->usuario[0]['COD_USUARIO'];
            $profile = $this->usuario[0]['ID_PERFIL'];

            $_SESSION["usuario"]=$name;
            $_SESSION["id"]=$id_usr;
            $_SESSION["profile"]=$profile;

            if ($this->usuario[0]['ID_PERFIL']==1) {

                header("Location:admin/controllerAdmin.php");

            } else {
                header("Location:../index.php");
            }
        }else {

            header("Location:../lgi1.php");

        }

        $conexion->close();
    }
}

?>