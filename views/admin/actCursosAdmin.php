  <body>
  <?php require_once('../../controllers/admin/controllerAdminActuaCurso.php')?>
  <div class="contAct">
  <form class="needs-validation" name="actCourse" id="actCourse" action="../../controllers/admin/controllerAdminGuardaActCur.php" method="get"  novalidate>
    <table class="table" id="usuarios">
        <?php
          foreach ($datos as $dato) {}
        ?>
        <tr>
            <td><strong>Código Curso</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $id; ?>" id="idCourse" name="idCourse" disabled></td>
        </tr>
        <tr>
            <td><strong>Nombre Curso</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["NOMBRE_CURSO"]; ?>" id="nombre" name="nombre" required disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('nombre')"></td>
        </tr>
        <tr>
            <td><strong>Cantidad Estudiantes</strong></td>
            <td><input type="text" class="form-control" value="<?php echo $dato["NRO_ESTUDIANTES"]; ?>" id="cantidad" name="cantidad" required disabled></td>
            <td><input class="btn btn-outline-dark btn-sm" type="button" value="editar" onclick="mostrar('cantidad')"></td>
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
  <script src="../../js/course.js"></script>
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
                  document.getElementById('actCourse').submit();
                },1900)
        };

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</body>
</html>