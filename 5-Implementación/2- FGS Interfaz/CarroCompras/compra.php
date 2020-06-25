<?php
require_once "classConnectionMySQL.php";

session_start();
$usuario = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="https://fotos.subefotos.com/9640a8c7f1cf1f3c8285117969372a04o.png">
  <title>Compra</title>
</head>



  <body background=https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg> <nav
    class="navbar navbar-expand-lg navbar-dark" style="background-color: #00000000;">
    <a class="navbar-brand" href="https://fgsusuario.000webhostapp.com/Usuario/zonas.html"><img
        src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png" width="320" height="120"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </nav>

    <center>
      <div class="card" style="width: 30rem; background-color:rgba(0, 0, 0, 0.61)">
        <div class="card-body">
          <br>
          <h2 style="color: white">¡Finaliza tú compra!</h2>
          <br>
          <?php

            $con1 = new ConnectionMySQL();                                                                                                                                                                                                                                      
            $con = $con1->Conectar();

            $a = "SELECT * FROM fgs_usuario 
            JOIN fgs_tipo_documento ON fgs_tipo_documento.id_tipo_documento = fgs_usuario.id_tipo_documento
            WHERE numero_documento = $usuario";

            $sql = mysqli_query($con, $a);
            $row = mysqli_fetch_assoc($sql);

        ?>

          <form>
            <div class="form-group">
              <label" style="color: white">Nombres </label>
              <input type="text" class="form-control" placeholder="<?php echo $row['primer_nombre_usuario'] .'&nbsp;'. $row['segundo_nombre_usuario']; ?>">
            </div>
          </form>
          <form>
            <div class="form-group">
              <label  style="color: white">Apellidos </label>
              <input type="text" class="form-control" placeholder="<?php echo $row['primer_apellido_usuario'] .'&nbsp;'. $row['segundo_apellido_usuario']; ?>">
            </div>
          </form>
          
            <div class="d-flex bd-highlight mb-3" style="width: 28rem">
              <div class="p-2 bd-highlight" style="color: white">
                <div class="form-group" style="width: 9rem">
                  <label  style="color: white">Tipo Documento </label>
                  <select class="form-control form-control-sm" id="idioma"
                    style="background-color: rgba(255, 255, 255, 0); color: white">
                    <option style="color: black"><?php echo $row['nombre_documento']; ?></option>
                  </select>
                </div>
              </div>
              <div class="ml-auto p-2 bd-highlight" style="color: white">
                <div class="form-group" style="width: 15rem">
                  <label  style="color: white">Número Documento</label>
                  <input type="text" class="form-control" placeholder="<?php echo $row['numero_documento']; ?>">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label  style="color: Yellow">Tipos de pago </label>
              <br>
              <label  style="color: Yellow">Servientrega </label>
            <h6 style="color: white">Diríjase a un servientrega y realize el pago con el convenio: 15789454 y envie una foto al Cel: 3136854785</h1>
            <br>
              <label  style="color: Yellow">Daviplata </label>
            <h6 style="color: white">dirijase a un servientrega o Efecty y relize transaccion a daviplata a la cedula 1001685475 y el numero de celular Cel: 3136854785 , y envie una foto al Cel: 3136854785</h1>
            <br>
              <label  style="color: Yellow">Valor del Envio </label>
            <h6 style="color: white">Por el valor del envio se añadiran 4.500</h1>

            </div>

            <form method="post" action="controlador_co.php" >
            <div class="form-group" style="width: 27rem">
              <label for="idioma" style="color: white">Método de pago </label>
              <select name="n1" class="form-control form-control-sm" id="idioma"
                style="background-color: rgb(255, 255, 255); color: gray">
                <?php
                    $b = "SELECT * FROM fgs_tipo_de_pago" ;
                  
                    $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
                    $con2 = $con->Conectar(); 

                    $z = mysqli_query($con2, $b);
                                                         
                while($x=mysqli_fetch_array($z))
                    {
                    echo "<option style='color:black'>" . $x["nombre_tipo_pago"] . "</option>";
                    }
                                
                ?>
              </select>
            </div>
            
            <div class="form-group">
              <label for="name" style="color: white">E-mail </label>
              <input type="text" class="form-control" placeholder="<?php echo $row['correo_usuario']; ?>">
            </div>

            
              <button class="btn btn-warning btn-block my-4 my-sm-6" type="submit"
                style="width: 20rem; background-color:yellow; ">
                <font size=5>Comprar</font>
              </button>
                </form>
        </div>
      </div>
    
    </center>

    <br>
    <br>
    <br>
    <br>

    <footer class="page-footer font-small indigo" style="background-color: rgb(0, 0, 0)">
      <div class="container">
        <br>
        <div class="row">
          <img src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png"
            style="width: 14rem; height: 6rem;">
        </div>
        <a style="color:white">Copyright © 2019</a> <a href="#" style="color:yellow">fgs <div class="row">
          </div>
      </div>
      <div class="container text-center text-md-left">
        <hr style="background-color: white">
        <div class="row">
          <div class="col-md-3 mx-auto">
            <h5 class="text-uppercase font-weight-bold" style="color:yellow"><br>Autores</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!" style="color:white">Diego Colorado</a>
              </li>
              <li>
                <a href="#!" style="color:white">Camilo Páez</a>
              </li>
              <li>
                <a href="#!" style="color:white">Cristian Mendez</a>
              </li>
              <br>
              <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                  <i class="fa fa-globe" aria-hidden="true"></i> Idioma
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Español</a>
                  <a class="dropdown-item" href="#">Ingles</a>
                </div>
              </div>
            </ul>
          </div>
          <div class="col-md-3 mx-auto">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:yellow">Contáctanos</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!" style="color:white"><i class="fa fa-map-marker" aria-hidden="true"></i>
                  Ubicación: Bogotá, Colombia</a>
              </li>
              <li>
                <a href="#!" style="color:white"><i class="fa fa-envelope" aria-hidden="true"></i> Email:
                  serviciocliente@fgs.com</a>
              </li>
              <li>
                <a href="#!" style="color:white">Términos de uso.</a>
              </li>
              <li>
                <a href="#!" style="color:white">Contáctanos.</a>
              </li>
            </ul>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div class="col-md-3 mx-auto">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:yellow">Síguenos</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!" style="color:white"><i class="fa fa-instagram" aria-hidden="true"></i>
                  Instagram</a>
              </li>
              <li>
                <a href="#!" style="color:white"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                  Facebook</a>
              </li>
              <li>
                <a href="#!" style="color:white"><i class="fa fa-youtube-play" aria-hidden="true"></i>
                  Youtube</a>
              </li>
            </ul>
          </div>
        </div>
        <hr style="background-color: white">
        <br>
      </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"></script>
  </body>

</html>