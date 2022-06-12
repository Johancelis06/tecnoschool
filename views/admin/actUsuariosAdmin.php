<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Actualiza Usuario - Admin</title>
    <link rel="stylesheet" href="../../style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php require_once('../../controllers/admin/controllerAdminActuaUsuario.php')?>
  <div class="contAct">
  <form class="needs-validation" name="actAdmin" id="actAdmin" action="../../controllers/admin/controllerAdminGuardaAct.php" method="get" novalidate>
    <table class="table">
        <?php
          foreach ($datos as $dato) {}
        ?>
        <tr>
            <td><strong>Código Usuario</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $id; ?>" id="idUser" name="idUser" disabled></td>
        </tr>
        <tr>
            <td><strong>ID Registro</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $registro; ?>" id="idReg" name="idReg" disabled></td>
        </tr>
        <tr>
            <td><strong>Mes de Actualización</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $data; ?>" id="mesdata" name="mesdata" disabled></td>
        </tr>
        <tr>
            <td><strong>Tipo Documento</strong></td>
            <td>
              <select class="form-select" id="tipo" name="tipo" disabled>
                <?php
                  foreach($tipos as $tipo){

                    if($tipo["TIPO"]==$dato["TIPO"]){
                ?> <option value="<?php echo $tipo["ID_TIPO"]; ?>" selected><?php echo $tipo["TIPO"]; ?></option> <?PHP
                    }else{
                ?>
                    <option value="<?php echo $tipo["ID_TIPO"]; ?>"><?php echo $tipo["TIPO"]; ?></option>
                <?php
                  }}
                ?>
              </select>
          </td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('tipo')"></td>
        </tr>
        <tr>
            <td><strong>Documento</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["ID_DOCUMENTO"]; ?>" id="documento" name="documento" disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('documento')"></td>
        </tr>
        <tr>
        <!--<?php echo $tipo["TIPO"]." ".$dato["TIPO"];?>-->
        </tr>
        <tr>
            <td><strong>Estado</strong></td>
            <td>
              <select class="form-select" id="estado" name="estado" disabled>
                <?php
                  foreach($estados as $estado){
                    if($estado["NOM_ESTADO"]==$dato["NOM_ESTADO"]){
                ?>
                    <option value="<?php echo $estado["ID_ESTADO"]; ?>" selected><?php echo $estado["NOM_ESTADO"]; ?></option><?php
                    }else{ ?>
                    <option value="<?php echo $estado["ID_ESTADO"]; ?>"><?php echo $estado["NOM_ESTADO"]; ?></option>
                <?php
                  }}
                ?>
              </select>
          </td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('estado')"></td>
        </tr>
        <tr>
            <td><strong>Nombre</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["NOMBRE_USUARIO"]; ?>" id="nombre" name="nombre" disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('nombre')"></td>
        </tr>
        <tr>
            <td><strong>Apellido</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["APELLIDO_USUARIO"]; ?>" id="apellido" name="apellido" disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('apellido')"></td>
        </tr>
        <tr>
            <td><strong>Usuario</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["USUARIO"]; ?>" id="usuario" name="usuario" disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('usuario')"></td>
        </tr>
        <tr>
            <td><strong>Fecha de Nacimiento</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["FECHA_NACIMIENTO"]; ?>" id="fnacimiento" name="fnacimiento" disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('fnacimiento')"></td>
        </tr>
        <tr>
            <td><strong>Perfil</strong></td>
            <td>
              <select class="form-select" id="perfil" name="perfil" disabled>
                <?php
                  foreach ($perfiles as $perfil) {
                    if($perfil["PERFIL"]==$dato["PERFIL"]){
                ?>
                <option value="<?php echo $perfil["ID_PERFIL"]; ?>" selected><?php echo $perfil["PERFIL"]; ?></option><?php
                    }else {?>
                    <option value="<?php echo $perfil["ID_PERFIL"]; ?>"><?php echo $perfil["PERFIL"]; ?></option>
                <?php
                  }}
                ?>
              </select>
            </td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('perfil')"></td>
        </tr>
        <tr>
            <td><strong>Fecha de Ingreso</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["F_INSCRIPCION"]; ?>" id="fingreso" name="fingreso" disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('fingreso')"></td>
        </tr>
        <tr>
            <td><strong>Fecha de Retiro</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["F_RETIRO"]; ?>" id="fretiro" name="fretiro" disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('fretiro')"></td>
        </tr>

    </table>
    <tr>
    <td>
      <div class="input-group mb-3">
        <input type="submit" class="btn btn-success btn-sm" id="guardar" value="Guardar"> |
        <a href="CreaUsuariosAdmin.php" class="btn btn-primary btn-sm">Volver</a>
      </div>
    </td>
    </tr>
  </form>
  </div>
  <script src="../../js/validationLogin.js"></script>
  <script src="../../js/admin.js"></script>
</body>
</html>