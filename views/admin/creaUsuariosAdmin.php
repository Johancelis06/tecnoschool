<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Adminitrar Usuarios - Admin</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php require_once('../../controllers/admin/controllerAdminCreaUsuario.php')?>
  <br>
    <a class="btn btn-success btn-sm" href="ingresaUsuariosAdmin.php">Crear Administrador</a>
  <br>
    <table class="table">
        <tr>
            <td><strong>N° Usuario</strong></td>
            <td><strong>Tipo Documento</strong></td>
            <td><strong>Documento</strong></td>
            <td><strong>Estado</strong></td>
            <td><strong>Nombre</strong></td>
            <td><strong>Apellido</strong></td>
            <td><strong>Usuario</strong></td>
            <td><strong>Fecha de Nacimiento</strong></td>
            <td><strong>Perfil</strong></td>
            <td><strong>Fecha de Ingreso</strong></td>
            <td><strong>Fecha de Retiro</strong></td>
            <td><strong>Detalle</strong></td>
        </tr>
        <?php
        foreach ($datos as $dato) {
            ?>
            <tr>
                <td><?php echo $dato["COD_USUARIO"]; ?></td>
                <td><?php echo $dato["TIPO"]; ?></td>
                <td><?php echo $dato["ID_DOCUMENTO"]; ?></td>
                <td><?php echo $dato["NOM_ESTADO"]; ?></td>
                <td><?php echo $dato["NOMBRE_USUARIO"]; ?></td>
                <td><?php echo $dato["APELLIDO_USUARIO"]; ?> </td>
                <td><?php echo $dato["USUARIO"]; ?> </td>
                <td><?php echo $dato["FECHA_NACIMIENTO"]; ?> </td>
                <td><?php echo $dato["PERFIL"]; ?> </td>
                <td><?php echo $dato["F_INSCRIPCION"]; ?> </td>
                <td><?php echo $dato["F_RETIRO"]; ?> </td>
                <td>
                  <a class="btn btn-warning btn-sm" href="actUsuariosAdmin.php?id=<?php echo $dato["COD_USUARIO"].'&cod='. $dato["COD_REGIS"].'&mes='. $dato["MESDATA"];?>">Actualizar</a>
                  <a class="btn btn-danger btn-sm" href="eliminaUsuariosAdmin.php?id=<?php echo $dato["COD_USUARIO"].'&cod='. $dato["COD_REGIS"].'&mes='. $dato["MESDATA"];?>">Eliminar</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>