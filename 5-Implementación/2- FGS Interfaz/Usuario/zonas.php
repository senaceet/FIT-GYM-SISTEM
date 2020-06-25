<?php
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
  <title>Zonas</title>
</head>

<body>

  <body
    background=https://i.kinja-img.com/gawker-media/image/upload/s--Wv3ouipp--/c_fill,fl_progressive,g_center,h_900,q_80,w_1600/811116324189419953.jpg>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
    <a class="navbar-brand" href="../Usuario/zonas.php"><img src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png"
        width="190" height="70"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <form action="../Usuario/zonas.php">
        <button class="btn  my-2 my-sm-0 mr-2" type="submit" style="background-color:yellow; width: 7rem; ">
          Zonas
        </button>
      </form>
      <form action="../Usuario/Rutinas.php">
        <button class="btn  my-2 my-sm-0 mr-2" type="submit" style="background-color:yellow; width: 7rem; ">
          Rutinas
        </button>
      </form>
      <div class="nav-item">
        <form action="../Usuario/dietas.php">
          <button class="btn my-2 my-sm-0 mr-2" type="submit" style="background-color:yellow; width: 7rem; ">
            Dietas
          </button>
        </form>
      </div>
      <div class="nav-item">
        <form action="../Tienda/Tienda.php">
          <button class="btn my-2 my-sm-0 mr-auto" type="submit" style="background-color:yellow; width: 7rem; ">
            Tienda
          </button>
        </form>
      </div>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" style="color: rgb(255, 255, 255)">
          <img src="https://miro.medium.com/max/1024/1*Age2mlAUaGBPNWcLvQPEUA.jpeg" width="40" height="40">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Usuario/Editar_perfil.php"
            style="color: black">Editar perfil</a>
          <a class="dropdown-item" href="../CarroCompras/CarroCompras.php"
            style="color: black">Carro de compras</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../index.html"
            style="color: black">Cerrar sesión</a>
        </div>
      </div>
      <div class="nav-item" style="width: 4rem">
      </div>
      </form>
    </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"
            src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
            alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://hellmansmma.com/wp-content/uploads/2017/05/iStock-889049592-1.jpg"
            alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://blog.fitnessfirstme.com/wp-content/uploads/2017/04/FF-B-1000x667-5.jpg"
            alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://www.cmdsport.com/app/uploads/2017/01/zona-cardio-gimnasio-go-fit.jpg" width="300"
                  height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Zona de Cardio</h5>
                <a href="#" class="btn btn-warning" data-target="#produk2" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <hr style="background-color:white">
              <a href="#">
                <img src="http://www.gimnasioarian.com/arianWPnew/wp-content/uploads/2013/07/musculacion1.jpg"
                  width="300" height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Zona de Musculación</h5>
                <a href="#" class="btn btn-warning" data-target="#produk3" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/23/52/a1/zona-musculacion.jpg" width="300"
                  height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Zona de Abdomen</h5>
                <a href="#" class="btn btn-warning" data-target="#produk4" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-group" style="color:white">
            <div class="card" style="background-color:rgba(58, 51, 51, 0)">
              <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
                <a href="#">
                  <hr style="background-color:white">
                  <img src="https://blog.securibath.com/wp-content/uploads/2015/06/sauna-finlandesa-1280x720.jpg"
                    width="300" height="250">
                </a>
              </button>

              <div class="card-body">
                <center>
                  <h5 class="card-title" style="color: white">Zona de Sauna</h5>
                  <a href="#" class="btn btn-warning" data-target="#produk5" data-toggle="modal">Detalles</a>
                  <hr style="background-color:white">
                </center>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://funzonerd.files.wordpress.com/2013/09/img_6322.jpg" width="300" height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Zona de Zumba</h5>
                <a href="#" class="btn btn-warning" data-target="#produk6" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://www.dir.cat/themes/custom/dir/images/zona-entrenament-funcional.jpg" width="300"
                  height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Zona Funcional</h5>
                <a href="#" class="btn btn-warning" data-target="#produk7" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Descripción Rutina 🏆</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="https://www.cambiatufisico.com/wp-content/uploads/rutina-pecho-pectoral-superior-1068x612.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Rutina:</th>
                    <td>Pecho</td>
                  </tr>
                  <tr>
                    <th>Duración: </th>
                    <td>1 Semana </td>
                  </tr>
                  <tr>
                    <th>Repeticiones:</th>
                    <td>De 3 a 5 series de 15 repeticiones cada una.</td>
                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td>Rutina de entrenamiento de pecho para exprimir y definir nuestro pectoral y conseguir un
                      buen corte.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="produk2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Descripción Rutina 🏆</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="https://www.cmdsport.com/app/uploads/2017/01/zona-cardio-gimnasio-go-fit.jpg" width="350"
                  height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Zona:</th>
                    <td>Zona de Cardio</td>

                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td> Es la zona de entrenamiento cardiovascular y resistencia aeróbica por excelencia. Se
                      combinan grasas y azúcares de nuestro organismo como fuente de energía de manera proporcionada
                      y tiene un consumo calórico mucho más elevado que la zona anterior.
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="produk3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Descripción Rutina 🏆</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="http://www.gimnasioarian.com/arianWPnew/wp-content/uploads/2013/07/musculacion1.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Zona:</th>
                    <td>Zona de Musculacion</td>
                  </tr>
                  <tr>

                  <tr>
                    <th>Descripción:</th>
                    <td> El trabajo con peso libre o asistido para el aumento de masa muscular.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="produk4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Descripción Rutina 🏆</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="https://media-cdn.tripadvisor.com/media/photo-s/11/23/52/a1/zona-musculacion.jpg" width="350"
                  height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Zona:</th>
                    <td>Zona de Abdomen</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>Tu abdomen se verá tan definido como quieras, trabajando en esta área del gimnasio dotada de
                      máquinas para el trabajo de tu zona media o core. Aprovecha también para activar tu cuerpo antes
                      de comenzar tu rutina y estirar una vez termines.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </div>


    <div class="modal fade" id="produk5" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Descripción Rutina 🏆</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="https://blog.securibath.com/wp-content/uploads/2015/06/sauna-finlandesa-1280x720.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Zona:</th>
                    <td>Zona de Sauna</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>es un baño de vapor o sudoración que se realiza en un recinto a muy alta temperatura. La sauna
                      tiene efectos buenos sobre el organismo, al liberar, mediante sudoración, que suele ser abundante
                      y rápida, toxinas y activar la circulación sanguínea.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="produk6" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Descripción Rutina 🏆</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="https://funzonerd.files.wordpress.com/2013/09/img_6322.jpg" width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Zona:</th>
                    <td>Zona de Zumba</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>beneficios de la zumba para nuestro organismo son numerosos. Entre ellos se encuentran,
                      principalmente, la pérdida de peso a través de la quema de calorías y la mejora de nuestra
                      condición y tono físicos.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="modal fade" id="produk7" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Descripción Rutina 🏆</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <img src="https://www.dir.cat/themes/custom/dir/images/zona-entrenament-funcional.jpg" width="350"
                  height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Zona:</th>
                    <td>Zona Funcional</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>Un espacio especialmente diseñado para desarrollar cualidades específicas de tu cuerpo como
                      coordinación, agilidad y fuerza.</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-content">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    </div>



    <footer class="page-footer font-small indigo" style="background-color: rgb(10, 10, 10)">
      <div class="container">
        <br>
        <div class="row">
          <img src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png"
            style="width: 14rem; height: 6rem;">
        </div>
        <a style="color:white">Copyright © 2019</a> <a href="#" style="color:yellow">FGS</a>
        <div class="row">
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
                <a href="#!" style="color:white">Cristhian Mendez</a>
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
                <a href="#!" style="color:white">Términos de uso</a>
              </li>
              <li>
                <a href="#!" style="color:white">Contáctanos</a>
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