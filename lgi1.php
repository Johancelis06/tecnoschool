<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </head>
  <body>
      <div class="mb-3">
      </div>
    <div class="cont">
        <form class="needs-validation" name="login" id="login" action="controllers/loginController.php" method="post" novalidate>
            <table class="table table-bordered">
                <tr>
                    <th>
                        <h3>Inciar Sesión</h3>
                    </th>
                </tr>
                <tr>
                    <td>
                        <label>Usuario:</label>
                        <input class="form-control" type="email" name="usuario" id="usuario" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su usuario ejemplo: "...@example.com".
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                        <input class="form-control" type="password" name="password" id="contrasema" required>
                        <div class="invalid-feedback">
                            Por favor ingrese su contraseña.
                        </div>
                        <p class="login">Usuario y/o contraseña incorrectos</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="sub">
                        <input type="submit" name="ingresar" id="ingresar" class="btn btn-warning" Value="Login">
                        <!--<a href="registro_docente.php" class="btn btn-danger">Registrar</a>-->
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="js/validationLogin.js"></script>
</body>
</html>