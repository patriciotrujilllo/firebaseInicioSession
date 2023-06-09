
<!DOCTYPE html>
<html>
<head>
  <title>Página de inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
</head>
<body>

<div id="loader">Cargando...</div>

<div id="contenido" style="display: none;">
  <h1>Se entro a la session</h1>
  <button id="logout"  class="btn btn-primary">Logout</button>

</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="../firebaseComprobarSession.js" type="module" async></script>
  <script src="../logout.js" type="module" async></script>
</body>
</html>
