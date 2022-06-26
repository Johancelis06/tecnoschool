
  <body>
  <?php require_once('../../controllers/admin/controllerAdminCreaCurso.php')?>
  <br>

  <br>
    <div class="contenedor">
    <a class="btn btn-success btn-sm" href="ingresaCursoAdmin.php">Crear Curso</a>
    <div class="conttable">
      <table class="table table-hover table-sm cell-corder comapct nowrap" id="cursos">
        <thead>
          <tr>
              <td><strong>N° Curso</strong></td>
              <td><strong>Nombre Curso</strong></td>
              <td><strong>Cantidad Estudiantes</strong></td>
              <td><strong>Detalle</strong></td>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($datos as $dato) {
              ?>
              <tr>
                  <td><?php echo $dato["COD_CURSO"]; ?></td>
                  <td><?php echo $dato["NOMBRE_CURSO"]; ?></td>
                  <td><?php echo $dato["NRO_ESTUDIANTES"]; ?> </td>
                  <td>
                    <a class="btn btn-warning btn-sm" href="actCursosAdmin.php?id=<?php echo $dato["COD_CURSO"];?>">Actualizar</a>
                    <a class="btn btn-danger btn-sm" href="eliminaCursosAdmin.php?id=<?php echo $dato["COD_CURSO"];?>">Eliminar</a>
                  </td>
              </tr>
              <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    </div>
    <script>

$(document).ready( function () {
    $('#cursos').DataTable({
      language: {
       decimal: ',',
       thousands: '.',
       processing: "Consulta en curso...",
       search: "Buscar:",
       lengthMenu: "Agrupar de _MENU_ items",
       info: "Mostrando del registro _START_ al _END_ de un total de _TOTAL_ items",
       infoEmpty: "No existen datos.",
       infoFiltered: "(Filtrado de _MAX_ elementos en total) ",
       infoPostFix: "",
       loadingRecords: "Cargando...",
       zeroRecords: "No se encontraron datos de tu busqueda.",
       emptyTable: "No hay datos para mostrar en la tabla.",
       paginate: {
         first: "Primero",
         previous: "Anterior",
         next: "Siguiente",
         last: "Ultimo"
       },
       aria: {
         sortAscending: ": active para ordenar la columna en orden ascendente",
         sortDescending: ": active para ordenar la columna en orden descendente"
       }
      },scrollY: '60vh',
      scrollCollapse: true,
      lengthMenu: [[10,50,-1],[10,50,"All"]],

   });
 });

</script>
</body>
</html>