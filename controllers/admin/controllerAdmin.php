<?php

require_once("../../sesion.php");
$usuario = $_SESSION['usuario'];
if($_SESSION['profile']==1){
    require_once("../../views/admin/navbar_admin.php");
    require_once("../../views/admin/home.php");
} else {
    echo "Usted no tiene permitido acceder a esta pagina";
}
?>