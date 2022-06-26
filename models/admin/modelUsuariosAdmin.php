<?php

require_once('../../models/conexionUsuarios.php');

class admin {

    private $db;
    private $usuario;
    private $query;
    private $queryEst;
    private $queryPer;
    private $date;
    private $course;

    public function __construct() {

        $this->usuario = array();
        $this->query = array();
        $this->queryEst = array();
        $this->queryPer = array();
        $this->course = array();
        $this->date = date("Y-m");
        $this->db=Conectar::conexion();
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    /*--------MODELOS USUARIOS ADMIN--------*/

    public function getUsers(){

        self::setNames();

        $sql = $this->db->prepare("SELECT * FROM QUERY_USU_ADM");
        $sql->execute();
        while($row = $sql->fetch()) {
            $this->usuario[] = $row;
        }
        $db= null;
        return $this->usuario;


    }

    public function getUsersActualiza($id,$mes,$regis){

        self::setNames();
        $sql = $this->db->prepare("SELECT * FROM QUERY_USU_ADM WHERE COD_USUARIO = :id AND MESDATA=:mes AND COD_REGIS =:regis");
        $sql->bindParam(':id',$id);
        $sql->bindParam(':mes',$mes);
        $sql->bindParam(':regis',$regis);
        $sql->execute();
        foreach ($sql as $res) {
            $this->usuario[] = $res;
        }
        $db= null;
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
        $sql = $this->db->prepare("UPDATE 1_USUARIO SET TIPO_DOCUMENTO =:tipo,ID_DOCUMENTO=:document,ESTADO=:status,NOMBRE_USUARIO=:name,APELLIDO_USUARIO=:lastname,USUARIO=:usr,FECHA_NACIMIENTO=:dateB,ID_PERFIL=:profile WHERE COD_USUARIO = :id");
        $sql->bindParam(':tipo',$tipo);
        $sql->bindParam(':document',$document);
        $sql->bindParam(':status',$status);
        $sql->bindParam(':name',$name);
        $sql->bindParam(':lastname',$lastname);
        $sql->bindParam(':usr',$usr);
        $sql->bindParam(':dateB',$dateB);
        $sql->bindParam(':profile',$profile);
        $sql->bindParam(':id',$id);
        $sql->execute();
        $sql =$this->db->prepare("UPDATE 10_REGISTRO_USUARIO SET F_INSCRIPCION =:dateI, F_RETIRO=:dateR, ID_ESTADO=:status WHERE COD_REGIS= :idReg and MESDATA=:mesdata");
        $sql->bindParam(':status',$status);
        $sql->bindParam(':dateI',$dateI);
        $sql->bindParam(':dateR',$dateR);
        $sql->bindParam(':idReg',$idReg);
        $sql->bindParam(':mesdata',$mesdata);
        $sql->execute();
        $db = null;

    }


    public function putUsuario($tipo,$document,$name,$lastname,$usr,$dateB,$dateI){

        self::setNames();
        $sql = $this->db->prepare("INSERT INTO 1_USUARIO (TIPO_DOCUMENTO,ID_DOCUMENTO,ESTADO,NOMBRE_USUARIO,APELLIDO_USUARIO,USUARIO,FECHA_NACIMIENTO,ID_PERFIL) VALUE (?,?,?,?,?,?,?,?)");
        $sql->bindParam(1,$tipo);
        $sql->bindParam(2,$document);
        $sql->bindParam(3,$status);
        $sql->bindParam(4,$name);
        $sql->bindParam(5,$lastname);
        $sql->bindParam(6,$usr);
        $sql->bindParam(7,$dateB);
        $sql->bindParam(8,$profile);
        $status=9;
        $profile=1;
        $sql->execute();
        $sql = $this->db->prepare("INSERT INTO 10_REGISTRO_USUARIO (COD_REGIS,F_INSCRIPCION,COD_USUARIO,ID_ESTADO,MESDATA) SELECT MAX(RU.COD_REGIS)+1,?,MAX(U.COD_USUARIO),?,'$this->date' FROM 1_USUARIO U,10_REGISTRO_USUARIO RU WHERE U.COD_USUARIO NOT IN(SELECT RU.COD_USUARIO FROM 10_REGISTRO_USUARIO)");
        $sql->bindParam(1,$dateI);
        $sql->bindParam(2,$status);
        $sql->execute();
        $sql = "INSERT INTO 2_ADMINISTRADOR SELECT COD_USUARIO FROM 1_USUARIO WHERE COD_USUARIO NOT IN ( SELECT A.COD_USUARIO FROM 2_ADMINISTRADOR A)";
        $this->db->query($sql);
        $db = null;

    }

    public function putUsuarioRepetido($dateI,$docu){

        self::setNames();
        $sql = "INSERT INTO 10_REGISTRO_USUARIO (COD_REGIS,F_INSCRIPCION,COD_USUARIO,ID_ESTADO,MESDATA) SELECT MAX(RU.COD_REGIS)+1,'$dateI',U.COD_USUARIO,9,'$this->date' FROM 1_USUARIO U,10_REGISTRO_USUARIO RU WHERE U.ID_DOCUMENTO = $docu";
        $this->db->query($sql);

        $conexion = null;
    }


    /*--------MODELOS CURSOS--------*/


    public function getCourse(){

        self::setNames();

        $sql = $this->db->prepare("SELECT * FROM 7_CURSO");
        $sql->execute();
        while($row = $sql->fetch()) {
            $this->course[] = $row;
        }
        $db= null;
        return $this->course;


    }

    public function putCourse($name,$cantidad){

        self::setNames();
        $sql = $this->db->prepare("INSERT INTO 7_CURSO (NOMBRE_CURSO,NRO_ESTUDIANTES) VALUE (?,?)");
        $sql->bindParam(1,$name);
        $sql->bindParam(2,$cantidad);
        $sql->execute();
        $db = null;

    }

    public function getCoursesActualiza($id){

        self::setNames();
        $sql = $this->db->prepare("SELECT * FROM 7_CURSO WHERE COD_CURSO = :id");
        $sql->bindParam(':id',$id);
        $sql->execute();
        foreach ($sql as $res) {
            $this->course[] = $res;
        }
        $db= null;
        return $this->course;

    }

    public function setCourse($id,$name,$cant){

        self::setNames();
        $sql = $this->db->prepare("UPDATE 7_CURSO SET NOMBRE_CURSO =:name,NRO_ESTUDIANTES=:cant WHERE COD_CURSO = :id");
        $sql->bindParam(':name',$name);
        $sql->bindParam(':cant',$cant);
        $sql->bindParam(':id',$id);
        $sql->execute();
        $db = null;

    }

    public function deleteCourses($id){

        self::setNames();
        $sql = $this->db->prepare("DELETE FROM 7_CURSO WHERE COD_CURSO = :id");
        $sql->bindParam(':id',$id);
        $sql->execute();
        $db= null;

    }


}

?>