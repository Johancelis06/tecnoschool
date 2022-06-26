  <body>
  <?php require_once('../../controllers/admin/controllerAdminActuaUsuario.php')?>
  <div class="contAct">
  <form class="needs-validation" name="actAdmin" id="actAdmin" action="../../controllers/admin/controllerAdminGuardaAct.php" method="get"  novalidate>
    <table class="table" id="usuarios">
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
              <select class="form-select" id="tipo" name="tipo" required disabled>
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
            <td><input type="text" class="form-control" value="<?php echo $dato["ID_DOCUMENTO"]; ?>" id="documento" name="documento" required disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('documento')"></td>
        </tr>
        <tr>
        <!--<?php echo $tipo["TIPO"]." ".$dato["TIPO"];?>-->
        </tr>
        <tr>
            <td><strong>Estado</strong></td>
            <td>
              <select class="form-select" id="estado" name="estado" onchange="change()" required disabled>
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
            <td><input type="text" class="form-control" value="<?php echo $dato["NOMBRE_USUARIO"]; ?>" id="nombre" name="nombre" required disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('nombre')"></td>
        </tr>
        <tr>
            <td><strong>Apellido</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["APELLIDO_USUARIO"]; ?>" id="apellido" name="apellido" required disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('apellido')"></td>
        </tr>
        <tr>
            <td><strong>Usuario</strong></td>
            <td><input type="email" class="form-control" value="<?php echo $dato["USUARIO"]; ?>" id="usuario" name="usuario"required disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('usuario')"></td>
        </tr>
        <tr>
            <td><strong>Fecha de Nacimiento</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["FECHA_NACIMIENTO"]; ?>" id="fnacimiento" name="fnacimiento" required disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('fnacimiento')"></td>
        </tr>
        <tr>
            <td><strong>Perfil</strong></td>
            <td>
              <select class="form-select" id="perfil" name="perfil" required disabled>
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
            <td><input type="text" class="form-control" value="<?php echo $dato["F_INSCRIPCION"]; ?>" id="fingreso" name="fingreso" required disabled></td>
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
        <input type="submit" class="btn btn-success btn-sm" name="guardar" id="guardar" value="Guardar"> |
        <a href="CreaUsuariosAdmin.php" class="btn btn-primary btn-sm">Volver</a>
      </div>
    </td>
    </tr>
  </form>
  </div>

  <script>

(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }else{
                event.preventDefault()
                event.stopPropagation()
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('submit', Swal.stopTimer)
                      toast.addEventListener('submit', Swal.resumeTimer)
                    }
                  })
                setTimeout(()=>{
                    document.getElementById('guardar').disabled = true;
                    document.getElementById('guardar').value = "Actualizando...";
                    Toast.fire({
                    icon: 'success',
                    title: 'Registro Actualizado.'
                  })

                }, 0)
                setTimeout(()=>{
                  document.getElementById('guardar').disabled = false;
                  document.getElementById('guardar').value = "Guardar";
                  document.getElementById('actAdmin').submit()
                },1900)
        };

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</body>
</html>