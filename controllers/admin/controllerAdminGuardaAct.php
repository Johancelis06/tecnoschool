<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];

$codUsr = $_GET['idUser'];
$codReg = $_GET['idReg'];
$tipo = $_GET['tipo'];
$docu = $_GET['documento'];
$status = $_GET['estado'];
$name = $_GET['nombre'];
$last = $_GET['apellido'];
$user = $_GET['usuario'];
$ndate = $_GET['fnacimiento'];
$profile = $_GET['perfil'];
$idate = $_GET['fingreso'];
$rdate = $_GET['fretiro'];

if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
    $query = $adm->setUsuario($codUsr,$codReg,$tipo,$docu,$status,$name,$last,$user,$ndate,$profile,$idate,$rdate);
    header("location:controllerAdminCreaUsuario.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>