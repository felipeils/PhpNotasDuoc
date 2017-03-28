<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://v4.pingendo.com/assets/bootstrap/themes/default.css" rel="stylesheet" type="text/css">
</head>

<body>
  <nav class="navbar navbar-full navbar-light bg-faded">
    <a class="navbar-brand" href="#">Navegador</a>
    <ul class="nav navbar-nav pull-right">
      <li class="nav-item">
        <a class="nav-link" href="index1.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fechasExamenes.html">Fechas Pruebas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="acerca.php">Acerca de</a>
      </li>
    </ul>
  </nav>
  <div class="bg-inverse section section-fill-height section-opaque-dark text-xs-center">
    <div class="background-image background-image-fixed" style="background-image : url('http://www.eduglobal.cl/wp-content/uploads/fotos/disena-el-cambio-1.jpg')"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-y-3">
          <h1 class="display-2 pi-draggable pi-item text-inverse">La imaginacion no tiene Limites! y lo sabemos ;)</h1>


        </div>
      </div>
    </div>
  </div>
  <div class="bg-faded p-y-3 section" draggable="true">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="pi-draggable pi-item">Nos preocupamos de dar un buen servicio</h1>
          <p><b>Contacto: Cel 952331624</b></p>
          <div class="m-y-2 m-y-lg row text-center">
            <div class="col-xs-4 text-left">
              <a><i class="fa fa-3x fa-facebook text-primary"></i></a>
            </div>
            <div class="col-xs-4 text-left">
              <a><i class="fa fa-3x fa-twitter text-primary"></i></a>
            </div>
            <div class="col-xs-4 text-left">
              <a><i class="fa fa-3x fa-instagram text-primary"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h1 class="pi-draggable pi-item">Contacto</h1>
          <form>
            <fieldset class="form-group">
              <label for="exampleInputEmail1">Tu nombre</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre"required="">
            </fieldset>
            <fieldset class="form-group">
              <label for="exampleInputEmail1">Tu Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"required="">
            </fieldset>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="p-y-3 section">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <h1 class="text-primary"></h1>
          <p class="lead">Todas las fechas importante de todos los ramos y alguna nota o apuntes todo y eso mas en tu pagina oficial de fecha examenes DUOCUC.</p>
          <?php 
$time = time();
echo date("d-m-Y (H:i:s)", $time);
?>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-faded p-y-0 section">
    <div class="container-fluid"></div>
  </div>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>




</body>

</html>