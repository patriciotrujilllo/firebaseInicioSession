<!DOCTYPE html>
<html>
<head>
  <title>Página de inicio</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="./login.js" type="module"></script>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <div class="row m-0 vh-100 justify-content-center align-items-center">
    <div class="row w-50">
      <div class="col p-5 rounded shadow">

      <h2 class="fw-bold text-center py-5">Bienvenido</h2>

        <!-- Login -->

        <form action="#" id="formInicioSesion">

          <div class="mb-4">
            <label class="form-label" for="email">Email:</label>
            <input class="form-control" type="text" id="email" name="email"  placeholder="email@email.com" required>
          </div>

          <div class="mb-4">
            <label class="form-label" for="password">Contraseña:</label>
            <input class="form-control" type="password" id="password" name="password" required>

          </div>
          

          
          <div class="d-grid">
          <button class="btn btn-primary" name="Ingresar" type="submit" value="Iniciar sesión">Iniciar Sesión</button>
          </div>

          <div class="my-3"></div>
            <span>No tienes cuenta? <a href="register.php">Regístrate</a></span> <br>
            <span><a href="#">Recuperar Password</a></span>
        </form>

        

      </div>
        

    </div>

  </div>



</body>

</html>




