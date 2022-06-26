
  <body>
  <?php require_once('../../controllers/admin/controllerAdminIngresaUsuarios.php')?>
  <div class="contAct">
  <form class="needs-validation" name="creaAdmin" id="creaAdmin" action="../../controllers/admin/controllerAdminGuardaUsu.php" method="get" novalidate>
    <table class="table">
        <tr>
            <td><strong>Tipo Documento</strong></td>
            <td>
              <select class="form-select" id="tipo" name="tipo" required>
                <option value="----">----</option>
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
            <td><input type="text" class="form-control" value="" id="documento" name="documento" required></td>
        </tr>
            <td><strong>Nombre</strong></td>
            <td><input type="text" class="form-control" value="" id="nombre" name="nombre" required></td>
        </tr>
        <tr>
            <td><strong>Apellido</strong></td>
            <td><input type="text" class="form-control" value="" id="apellido" name="apellido" required></td>
        </tr>
        <tr>
            <td><strong>Usuario</strong></td>
            <td><input type="email" class="form-control" value="" id="usuario" name="usuario" required></td>
        </tr>
        <tr>
            <td><strong>Fecha de Nacimiento</strong></td>
            <td><input type="text" class="form-control" value="" id="fnacimiento" name="fnacimiento" required></td>
        </tr>
        <tr>
            <td><strong>Fecha de Ingreso</strong></td>
            <td><input type="text" class="form-control" value="" id="fingreso" name="fingreso" required></td>
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
                    document.getElementById('guardar').value = "Guardando...";
                    Toast.fire({
                    icon: 'success',
                    title: 'Registro Guardado.'
                  })

                }, 0)
                setTimeout(()=>{
                  document.getElementById('guardar').disabled = false;
                  document.getElementById('guardar').value = "Guardar";
                  document.getElementById('creaAdmin').submit()
                },1900)
        };

        form.classList.add('was-validated')
      }, false)
    })
})()

  </script>
</body>
</html>