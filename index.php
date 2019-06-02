<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <section class="contenido">
        <h2>Crear Usuario</h2>
          <div class="row">
            <form class="col s12" method="post" action="index.php">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">#</i>
                  <input type="text" class="validate" name="txtid" >
                  <label>Identicación</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input type="text" class="validate" name="txtnom">
                  <label>Nombre</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix">account_circle</i>
                  <input  type="text" class="validate" name="txtape">
                  <label>Apellido</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix">email</i>
                  <input type="tel" class="validate" name="txtcorreo">
                  <label>Correo</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="btnguardar">Guardar
              <i class="material-icons right">send1</i>
              </button>
            </form>
          </div>
    </section>
       <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

  <?php 
    include('config/conexion.php');

    error_reporting(0);
    $id=  $_POST['txtid'];
    $nom= $_POST['txtnom'];
    $ape= $_POST['txtape'];
    $correo= $_POST['txtcorreo'];
    $guardar = $_POST['btnguardar'];

    if(isset($guardar)){
      $sql = "INSERT INTO usuarios VALUES($id, '$nom', '$ape', '$correo')";
      if($ejecutar = $conexion->query($sql)){
        echo "<script>M.toast({html: 'Guardado Correctamente', classes: 'rounded green'});</script>";
      }else{
        echo "<script>M.toast({html: 'Error, No se puedo Guardar', classes: 'rounded red'});</script>";
      }
    }
   ?>