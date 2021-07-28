
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca virtual</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/estilos.css" rel="stylesheet">
  </head>
  <style>
      
      .button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
body {
    background-image: url(./img/webb.png);
}
      
  </style>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="barra-roja">
      <a class="navbar-brand" href="http://localhost/bick/index.php">Biblioteca virtual</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="ingreso.php">Inicia sesión <span class="sr-only">(current)</span></a>
          </li>
          

        </ul>
        <form action="libroconsulta.php" method="GET" class="form-inline my-2 my-lg-0">
          
        <button class="btn btn-outline-success my-2 my-sm-0" name="busqueda" value="">Todos</button>
</form>
<p>- </p>
        <form action="libroconsulta.php" method="GET" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" name="busqueda" id="search" placeholder="¿Qué buscas?" >
          <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
          </form>
        
        
        
      </div>
    </nav>

    <div class="container">
      

      <div class="starter-template">
          <br>
          <br>
          <br>
          <br>
          <br>
          
          <h1 align="center">Biblioteca Montano</h1>
        
        <p class="lead" align="center">Todos los libros que busques.<br> ¡Todos!</p>
        <br>
        <p class="lead" align="center">Puedes buscar el libro que quieras, por titulo o autor!<br> </p>
        
        
        <div align="center">
        <form action="libroconsulta.php" method="GET" class="form">
            <input type="text" style="text-aling:center;" name="busqueda" id="search" placeholder="¿Qué buscas?" >
          <h1></h1>
          <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
        </form>
        </div>
       
        
         


    <br>

    <p class="lead" align="center" >
        
     <?php
                include_once 'app/Conexion.php';
                
                Conexion :: abrir_conexion();
                Conexion :: cerrar_conexion();        
                ?>
    </p>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="js/clickbait.js"></script>
  </body>
</html>