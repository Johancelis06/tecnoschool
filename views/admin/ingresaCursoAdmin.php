
  <body>
  <?php require_once('../../controllers/admin/controllerAdminIngresaCursos.php')?>
  <div class="contAct">
    <div class="col-12">
      <div class="col-md-8">
        <form class="needs-validation" name="creaCourse" id="creaCourse" action="../../controllers/admin/controllerAdminGuardaCur.php" method="get" novalidate>

          <table class="table">
              <tr>
                  <td><strong>Nombre Curso</strong></td>
                  <td><input type="text" class="form-control" value="" id="name" name="name" required></td>
              </tr>
                  <td><strong>Cantidad Estudiantes</strong></td>
                  <td><input type="number" class="form-control" value="" id="cant" name="cant" required></td>
              </tr>

          </table>
          <tr>
          <td>
            <div class="input-group mb-3">
              <input type="submit" class="btn btn-success btn-sm" id="guardar" value="Guardar"> |
              <a href="CreaCursosAdmin.php" class="btn btn-primary btn-sm">Volver</a>
            </div>
          </td>
          </tr>
        </form>
      </div>
    </div>
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
                  document.getElementById('creaCourse').submit()
                },1900)
        };

        form.classList.add('was-validated')
      }, false)
    })
})()

  </script>
</body>
</html>