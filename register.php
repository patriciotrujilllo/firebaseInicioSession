<!DOCTYPE html>
<html>
<head>
  <title>Registrar</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="./registrar.js" type="module"></script>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <div class="row m-0 vh-100 justify-content-center align-items-center">
    <div class="row w-50">
      <div class="col p-5 rounded shadow">

      <h2 class="fw-bold text-center py-5">Registrar</h2>

        <!-- Login -->

        <form action="#" id="formRegister">
        <div class="mb-4">
            <label class="form-label" for="nombre">Nombre:</label>
            <input class="form-control" type="text" id="nombre" name="nombre" required>
          </div>

          <div class="mb-4">
            <label class="form-label" for="apellido">Apellido:</label>
            <input class="form-control" type="text" id="apellido" name="apellido" required>
          </div>

          <div class="mb-4">
            <label class="form-label" for="email">Email:</label>
            <input class="form-control" type="text" id="email" name="email"  placeholder="email@email.com" required>
          </div>

          <div class="mb-4">
            <label class="form-label" for="password">Contraseña:</label>
            <input class="form-control" type="password" id="password" name="password" required>
          </div>
          

          
          <div class="d-grid">
          <button class="btn btn-primary" type="submit">Registrar</button>
          </div>

          <div class="my-3"></div>
            <span>ya tienes cuenta? <a href="login.php">Inicia sesión</a></span> <br>
          
        </form>

        <!-- login con redes sociales-->
        

      </div>
        

    </div>

  </div>


</body>

</html>




