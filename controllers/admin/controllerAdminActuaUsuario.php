<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];
$id = $_GET['id'];
$registro = $_GET['cod'];
if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
    $datos = $adm->getUsersActualiza($id);
    $tipos = $adm->getTipoDocumento();
    $estados = $adm->getEstado();
    $perfiles = $adm->getPerfil();
    require_once("../../views/admin/navbar_admin.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>