<?php
    require_once("../models/modelLogin.php");

    $usr = $_POST['usuario'];
    $pss = $_POST['password'];
    $usu = new login();

    $datos = $usu->getRoute($usr,$pss);

?>