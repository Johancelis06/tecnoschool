<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];
if($_SESSION['profile']==1){
    require_once("../../models/admin/modelUsuariosAdmin.php");
    $adm = new admin();
    $tipos = $adm->getTipoDocumento();
    require_once("../../views/admin/ingresaUsuariosAdmin.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>