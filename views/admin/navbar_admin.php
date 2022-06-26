<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="UTF-8" />
    <title>Actualiza Usuario - Admin</title>
    <script src="//code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="../../style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    </head>
  <body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h3 class="text-white">Tecnoschool</h3>
    <a class="nav-link" href="home.php"><h3 class="text-white">Home</h3></a>
    <h3 class="text-white">Bienvenido <?php echo $usuario ?></h3>
    <a class="nav-link" href="../../cierra_sesion.php"><p class="text-white">Cerrar Sesión</p></a>
  </div>
  <br><br>

  <div class="offcanvas offcanvas-start" data-bs-scroll="false" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Administrador</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   <div class="bg-primary p-4">
        <h6 class="nav-item text-white h6">Administrar usuarios</h6>
        <ul class="navbar-nav">
          <li class="nav-item text-white"><a class="nav-link" href="CreaUsuariosAdmin.php">Administrador.</a></li>
          <li class="nav-item text-white"><a>Docente.</a></li>
          <li class="nav-item text-white"><a>Estudiante.</a></li>
          <li class="nav-item text-white"><a>Padre de Familia.</a></li>
        </ul>
        <br>
        <h6 class="nav-item text-white h6">Administrar Cursos</h6>
        <ul class="navbar-nav">
          <li class="nav-item text-white"><a class="nav-link" href="CreaCursosAdmin.php">Cursos.</a></li>
        </ul>
        <br>
        <h6 class="nav-item text-white h6">Administrar Asignaturas</h6>
        <ul class="navbar-nav">
          <li class="nav-item text-white"><a class="nav-link" href="#">Asignaturas.</a></li>
        </ul>
        <br>
        <h6 class="nav-item text-white h6">Administrar Horarios</h6>
        <ul class="navbar-nav">
          <li class="nav-item text-white"><a class="nav-link" href="#">Horarios.</a></li>
        </ul>
        <br>
        <h6 class="nav-item text-white h6">Administrar Estados</h6>
        <ul class="navbar-nav">
          <li class="nav-item text-white"><a class="nav-link" href="#">Usuarios.</a></li>
          <li class="nav-item text-white"><a class="nav-link" href="#">Actividades.</a></li>
        </ul>
        <br>
        <h6 class="nav-item text-white h6">Administrar Perfiles</h6>
        <ul class="navbar-nav">
          <li class="nav-item text-white"><a class="nav-link" href="#">Perfiles.</a></li>
        </ul>
        <br>
        <h6 class="nav-item text-white h6">Reportes</h6>
        <ul class="navbar-nav">
          <li class="nav-item text-white"><a class="nav-link" href="#">Notas.</a></li>
        </ul>
      </div>

  </div>
</div>
  <div class="collapse" id="navbarToggleExternalContent">

</div>
</nav>
</body>
</html>