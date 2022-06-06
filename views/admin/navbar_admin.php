<!DOCTYPE html>
<html lang="en">

  <body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h3 class="text-white">Tecnoschool</h3>
    <a class="nav-link" href="controllerAdmin.php"><h3 class="text-white">Home</h3></a>
    <h3 class="text-white">Bienvenido <?php echo $usuario ?></h3>
  </div>
  <br><br>
  <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-primary p-4">
    <h5 class="text-white h4">Administrar usuarios</h5>
    <ul class="navbar-nav">
    <li class="nav-item text-white"><a class="nav-link" href="controllerAdminCreaUsuario.php">Administrador.</a></li>
    <li class="text-white"><a>Docente.</a></li>
    <li class="text-white"><a>Estudiante.</a></li>
    <li class="text-white"><a>Padre de Familia.</a></li>
    </ul>
  </div>
</div>
</nav>
</body>
</html>