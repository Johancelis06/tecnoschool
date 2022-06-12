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
    $identifica = $adm->getUsers();
    foreach ($identifica as $id) {

        if($id['ID_DOCUMENTO']==$docu){
            $valida=$id['ID_DOCUMENTO'];
            break;
        }
    }
    if($valida!=$docu){
        $query = $adm->putUsuario($tipo,$docu,$name,$last,$user,$ndate,$idate);
        header("location:../../views/admin/creaUsuariosAdmin.php");
    } else{

        $query = $adm->putUsuarioRepetido($idate,$docu);
        header("location:../../views/admin/creaUsuariosAdmin.php");
    }

} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>