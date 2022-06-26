<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];
$id = $_GET['id'];

if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
    $datos = $adm->getCoursesActualiza($id);
    require_once("../../views/admin/navbar_admin.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>