<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];

$id = $_GET['idCourse'];
$name = $_GET['nombre'];
$cant = $_GET['cantidad'];

if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
    $query = $adm->setCourse($id,$name,$cant);
    header("location:../../views/admin/creaCursosAdmin.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>