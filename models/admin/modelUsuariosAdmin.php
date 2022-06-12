<?php

require_once('../../models/conexionUsuarios.php');

class admin {

    private $db;
    private $usuario;
    private $query;
    private $queryEst;
    private $queryPer;
    private $date;

    public function __construct() {

        $this->usuario = array();
        $this->query = array();
        $this->queryEst = array();
        $this->queryPer = array();
        $this->date = date("y-m");
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
        $conexion= null;
        return $this->usuario;


    }

    public function getUsersActualiza($id){

        self::setNames();
        $sql = "SELECT * FROM QUERY_USU_ADM WHERE COD_USUARIO = $id";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        $conexion= null;
        return $this->usuario;

    }

    public function getTipoDocumento(){

        self::setNames();
        $sql = "SELECT * FROM 12_TIPO_DOCUMENTO";
        foreach ($this->db->query($sql) as $res) {
            $this->query[] = $res;
        }
        $conexion= null;
        return $this->query;


    }

    public function getEstado(){

        self::setNames();
        $sql = "SELECT * FROM 11_ESTADO_USUARIO";
        foreach ($this->db->query($sql) as $res) {
            $this->queryEst[] = $res;
        }
        $conexion= null;
        return $this->queryEst;

    }

    public function getPerfil(){

        self::setNames();
        $sql = "SELECT * FROM 30_PERFIL";
        foreach ($this->db->query($sql) as $res) {
            $this->queryPer[] = $res;
        }
        $conexion= null;
        return $this->queryPer;

    }

    public function setUsuario($id,$idReg,$tipo,$document,$status,$name,$lastname,$usr,$dateB,$profile,$dateI,$dateR,$mesdata){

        self::setNames();
        $sql = "UPDATE 1_USUARIO SET TIPO_DOCUMENTO =$tipo,ID_DOCUMENTO=$document,ESTADO=$status,NOMBRE_USUARIO='$name',APELLIDO_USUARIO='$lastname',USUARIO='$usr',FECHA_NACIMIENTO='$dateB',ID_PERFIL=$profile WHERE COD_USUARIO = $id";
        $this->db->query($sql);
        $sql = "UPDATE 10_REGISTRO_USUARIO SET F_INSCRIPCION ='$dateI', F_RETIRO='$dateR', ID_ESTADO=$status WHERE COD_REGIS= $idReg and MESDATA='$mesdata'";
        $this->db->query($sql);

    }


    public function putUsuario($tipo,$document,$name,$lastname,$usr,$dateB,$dateI){

        self::setNames();
        $sql = "INSERT INTO 1_USUARIO (TIPO_DOCUMENTO,ID_DOCUMENTO,ESTADO,NOMBRE_USUARIO,APELLIDO_USUARIO,USUARIO,FECHA_NACIMIENTO,ID_PERFIL) VALUE ($tipo,$document,9,'$name','$lastname','$usr','$dateB',1)";
        $this->db->query($sql);
        $sql = "INSERT INTO 10_REGISTRO_USUARIO (COD_REGIS,F_INSCRIPCION,COD_USUARIO,ID_ESTADO,MESDATA) SELECT MAX(RU.COD_REGIS)+1,'2022-06-11',MAX(U.COD_USUARIO),9,'$date' FROM 1_USUARIO U,10_REGISTRO_USUARIO RU WHERE U.COD_USUARIO NOT IN(SELECT RU.COD_USUARIO FROM 10_REGISTRO_USUARIO)";
        $this->db->query($sql);
        $sql = "INSERT INTO 2_ADMINISTRADOR SELECT COD_USUARIO FROM 1_USUARIO WHERE COD_USUARIO NOT IN ( SELECT A.COD_USUARIO FROM 2_ADMINISTRADOR A)";
        $this->db->query($sql);

    }


}

?>