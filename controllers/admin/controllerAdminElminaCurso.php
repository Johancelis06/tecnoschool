<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];
$id = $_GET['id'];

if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
    $datos = $adm->deleteCourses($id);
    header("location:../../views/admin/creaCursosAdmin.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>