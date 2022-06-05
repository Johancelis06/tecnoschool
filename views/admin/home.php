<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Home Admin</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button><h3 class="text-white">Bienvenido <?php echo $usuario ?></h3>
  </div>
  <br><br>
  <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-primary p-4">
    <h5 class="text-white h4">Administrar usuarios</h5>
    <ul class="navbar-nav">
    <li class="nav-item text-white"><a class="nav-link" href="../../controllers/admin/controllerAdminCreaUsuario.php">Administrador.</a></li>
    <li class="text-white"><a>Docente.</a></li>
    <li class="text-white"><a>Estudiante.</a></li>
    <li class="text-white"><a>Padre de Familia.</a></li>
    </ul>
  </div>
</div>
</nav>
</body>
</html>