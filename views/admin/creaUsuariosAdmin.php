
  <body>
  <?php require_once('../../controllers/admin/controllerAdminCreaUsuario.php')?>
  <br>

  <br>
    <div class="contenedor">
    <a class="btn btn-success btn-sm" href="ingresaUsuariosAdmin.php">Crear Administrador</a>
    <div class="conttable">
      <table class="table table-hover table-sm cell-corder comapct nowrap" id="usuarios">
        <thead>
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
        </thead>
        <tbody>
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
        </tbody>
      </table>
    </div>
    </div>
    <script>

$(document).ready( function () {
    $('#usuarios').DataTable({
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
      scrollX: 700,
      lengthMenu: [[10,50,-1],[10,50,"All"]],

   });
 });

</script>
</body>
</html>