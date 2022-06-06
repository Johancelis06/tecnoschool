<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Crea Usuario - Admin</title>
    <link rel="stylesheet" href="../../style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php include('../../views/admin/navbar_admin.php')?>
  <div class="contAct">
  <form class="needs-validation" name="actAdmin" id="actAdmin" action="controllerAdminGuardaUsu.php" method="get" novalidate>
    <table class="table">
        <tr>
            <td><strong>Tipo Documento</strong></td>
            <td>
              <select class="form-select" id="tipo" name="tipo">
                <?php
                  foreach($tipos as $tipo){
                ?>
                    <option value="<?php echo $tipo["ID_TIPO"]; ?>"><?php echo $tipo["TIPO"]; ?></option>
                <?php
                  }
                ?>
              </select>
          </td>
        </tr>
        <tr>
            <td><strong>Documento</strong></td>
            <td><input type="text" class="form-control" value="" id="documento" name="documento"></td>
        </tr>
            <td><strong>Nombre</strong></td>
            <td><input type="text" class="form-control" value="" id="nombre" name="nombre"></td>
        </tr>
        <tr>
            <td><strong>Apellido</strong></td>
            <td><input type="text" class="form-control" value="" id="apellido" name="apellido"></td>
        </tr>
        <tr>
            <td><strong>Usuario</strong></td>
            <td><input type="text" class="form-control" value="" id="usuario" name="usuario"></td>
        </tr>
        <tr>
            <td><strong>Fecha de Nacimiento</strong></td>
            <td><input type="text" class="form-control" value="" id="fnacimiento" name="fnacimiento"></td>
        </tr>
        <tr>
            <td><strong>Fecha de Ingreso</strong></td>
            <td><input type="text" class="form-control" value="" id="fingreso" name="fingreso"></td>
        </tr>
    </table>
    <tr>
    <td>
      <div class="input-group mb-3">
        <input type="submit" class="btn btn-success btn-sm" id="guardar" value="Guardar"> |
        <a href="controllerAdminCreaUsuario.php" class="btn btn-primary btn-sm">Volver</a>
      </div>
    </td>
    </tr>
  </form>
  </div>
  <script src="../../js/validationLogin.js"></script>
  <script src="../../js/admin.js"></script>
</body>
</html>