<?php
    require_once("../models/modelLogin.php");

    $usr = $_POST['usuario'];
    $pss = $_POST['password'];
    $usu = new login();

    $datos = $usu->getRoute($usr,$pss);

    foreach($datos as $dato){

    }

    if ($dato!=0) {

        session_start();

        $name = $dato['NOMBRE_USUARIO']." ".$dato['APELLIDO_USUARIO'];
        $id_usr = $dato['COD_USUARIO'];
        $profile = $dato['ID_PERFIL'];

        $_SESSION["usuario"]=$name;
        $_SESSION["id"]=$id_usr;
        $_SESSION["profile"]=$profile;

        if ($dato['ID_PERFIL']==1) {

            header("Location:../views/admin/home.php");

        } else {
            header("Location:../index.php");
        }
    }else {

        header("Location:../lgi1.php");

    }

?>