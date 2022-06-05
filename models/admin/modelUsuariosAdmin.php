<?php

require_once('../../models/conexionUsuarios.php');

class admin {

    private $db;
    private $usuario;
    private $query;
    private $queryEst;
    private $queryPer;

    public function __construct() {

        $this->usuario = array();
        $this->query = array();
        $this->queryEst = array();
        $this->queryPer = array();
        $this->db=Conectar::conexion();
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getUsers(){

        self::setNames();
        $sql = "SELECT * FROM QUERY_USU_ADM";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;

        $conexion->close();

    }

    public function getUsersActualiza($id){

        self::setNames();
        $sql = "SELECT * FROM QUERY_USU_ADM WHERE COD_USUARIO = $id";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;

        $conexion->close();
    }

    public function getTipoDocumento(){

        self::setNames();
        $sql = "SELECT * FROM 12_TIPO_DOCUMENTO";
        foreach ($this->db->query($sql) as $res) {
            $this->query[] = $res;
        }
        return $this->query;

        $conexion->close();
    }

    public function getEstado(){

        self::setNames();
        $sql = "SELECT * FROM 11_ESTADO_USUARIO";
        foreach ($this->db->query($sql) as $res) {
            $this->queryEst[] = $res;
        }
        return $this->queryEst;

        $conexion->close();
    }

    public function getPerfil(){

        self::setNames();
        $sql = "SELECT * FROM 30_PERFIL";
        foreach ($this->db->query($sql) as $res) {
            $this->queryPer[] = $res;
        }
        return $this->queryPer;

        $conexion->close();
    }

    public function setUsuario($id,$idReg,$tipo,$document,$status,$name,$lastname,$usr,$dateB,$profile,$dateI,$dateR){

        self::setNames();
        $sql = "UPDATE 1_USUARIO SET TIPO_DOCUMENTO =$tipo,ID_DOCUMENTO=$document,ESTADO=$status,NOMBRE_USUARIO='$name',APELLIDO_USUARIO='$lastname',USUARIO='$usr',FECHA_NACIMIENTO='$dateB',ID_PERFIL=$profile WHERE COD_USUARIO = $id";
        $this->db->query($sql);
        $sql = "UPDATE 10_REGISTRO_USUARIO SET F_INSCRIPCION ='$dateI', F_RETIRO='$dateR', ID_ESTADO=$status WHERE COD_REGIS= $idReg";
        $this->db->query($sql);

    }


}

?>