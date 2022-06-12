<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];

$tipo = $_GET['tipo'];
$docu = $_GET['documento'];
$name = $_GET['nombre'];
$last = $_GET['apellido'];
$user = $_GET['usuario'];
$ndate = $_GET['fnacimiento'];
$idate = $_GET['fingreso'];

if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
    $query = $adm->putUsuario($tipo,$docu,$name,$last,$user,$ndate,$idate);
    echo 'registro guardado';
    //header("location:../../views/admin/creaUsuariosAdmin.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>