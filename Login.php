<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://v4.pingendo.com/assets/bootstrap/themes/default.css" rel="stylesheet" type="text/css">
</head>
<script language="JavaScript">
      function pregunta(){ 
          if (confirm('¿Estas seguro de enviar este formulario?')){ 
             document.tuformulario.submit() 
          } 
      }
    </script>
<body>
  <nav class="navbar navbar-full navbar-light bg-faded" draggable="true">
    <a class="navbar-brand" href="#">Navegador</a>
    <ul class="nav navbar-nav pull-right">
      <li class="nav-item">
        <a class="nav-link" href="index1.html">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fechasExamenes.html">Fechas Pruebas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acerca.php">Acerca de</a>
      </li>
    </ul>
  </nav>
  <div class="bg-inverse section section-fill-height section-opaque-dark text-xs-center">
    <div class="background-image background-image-fixed" style="background-image : url('http://v4.pingendo.com/assets/photos/apple/photo-1.jpg')"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-y-3">
          <h1 class="display-1 pi-draggable pi-item text-inverse">Ingreso de usuarios</h1>
          <form method="post" action="index1.html">
            <div class="form-group" id="usuario">
              <label>Usuario</label>
              <input type="text" class="form-control" placeholder="Usuario" name="usuario"required="">
              
              <?php 
if($_POST['usuario']){
    if(validaUsuario($_POST['usuario'])==true){

    }else{
         echo"<script type=\"text/javascript\">alert('Usted esta siendo redireccionado a la pagina principal'); window.location='index.php';</script>";
        echo "El usuario ".$_POST['usuario']." es v&aacute;lido";
         echo "El usuario ".$_POST['contra']." no es incorrecto";
    }
}
?>
            </div>
            <div class="form-group" id="contra">
              <label>Contraseña</label>
              <input type="password" class="form-control" placeholder="Contraseña" id="contra"required="">
            </div>
            <input type="submit" class="btn btn-primary" onclick="pregunta()">Ingresar</button>
         
          </form>

        </div>
      </div>
    </div>
  </div>
  <div class="p-y-3 section">
    <div class="container">
      <div class="row">

        <div class="col-md-6">

          <p class="lead">Todas las fechas importante de todos los ramos y alguna nota o apuntes todo y eso mas en tu pagina oficial de fecha examenes DUOCUC.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="bg-faded p-y-0 section">
    <div class="container-fluid"></div>
  </div>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>















<?php 
$time = time();
echo date("d-m-Y (H:i:s)", $time);

?>
</body>

</html>
<?php
function validaUsuario($usuario){
    if($rut ==""){
        return true;
    }
    else
    {
        return false;
    }
    
}

?>

