<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];

$name = $_GET['name'];
$cantidad = $_GET['cant'];


if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
        $query = $adm->putCourse($name,$cantidad);
        header("location:../../views/admin/creaCursosAdmin.php");

} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>