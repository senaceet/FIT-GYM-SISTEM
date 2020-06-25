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
  <title>Rutinas</title>
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
          <a class="dropdown-item" href="../Usuario/Carrito_FGS.php"
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
        <div class="card-group" style="color:white">
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://www.cambiatufisico.com/wp-content/uploads/rutina-pecho-pectoral-superior-1068x612.jpg"
                  width="250" height="200">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Rutina Pecho</h5>
                <a href="#" class="btn btn-warning" data-target="#produk1" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://i.blogs.es/9fd2bd/image_preview/450_1000.jpeg" width="250" height="200">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Rutina Espalda</h5>
                <a href="#" class="btn btn-warning" data-target="#produk2" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <hr style="background-color:white">
              <a href="#">
                <img
                  src="https://cdn2.actitudfem.com/media/files/styles/large/public/images/2018/12/rutina-ejercicio-pierna.jpg"
                  width="250" height="200">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Rutina Pierna</h5>
                <a href="#" class="btn btn-warning" data-target="#produk3" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://www.cambiatufisico.com/wp-content/uploads/ejercicios-triceps-1068x601.jpg" width="250"
                  height="200">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Rutina Triceps</h5>
                <a href="#" class="btn btn-warning" data-target="#produk4" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">
          <div class="card-group" style="color:white">
            <div class="card" style="background-color:rgba(58, 51, 51, 0)">
              <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
                <a href="#">
                  <hr style="background-color:white">
                  <img
                    src="https://www.sportlife.es/media/cache/original/upload/images/imagegallery/5646/imagenes/imagegallery-5646-5943b5481c76e.jpg"
                    width="250" height="200">
                </a>
              </button>
              <div class="card-body">
                <center>
                  <h5 class="card-title" style="color: white">Rutina Hombro</h5>
                  <a href="#" class="btn btn-warning" data-target="#produk5" data-toggle="modal">Detalles</a>
                  <hr style="background-color:white">
                </center>
              </div>
            </div>
            <div class="card" style="background-color:rgba(58, 51, 51, 0)">
              <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
                <a href="#">
                  <hr style="background-color:white">
                  <img src="https://www.cambiatufisico.com/wp-content/uploads/rutina-biceps1-1068x601.jpg" width="250"
                    height="200">
                </a>
              </button>
              <div class="card-body">
                <center>
                  <h5 class="card-title" style="color: white">Rutina Biceps</h5>
                  <a href="#" class="btn btn-warning" data-target="#produk6" data-toggle="modal">Detalles</a>
                  <hr style="background-color:white">
                </center>
              </div>
            </div>
            <div class="card" style="background-color:rgba(58, 51, 51, 0)">
              <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
                <a href="#">
                  <hr style="background-color:white">
                  <img src="https://cdn.kiwilimon.com/ss_secreto/1384/th5-640x426-1384.jpg" width="250" height="200">
                </a>
              </button>
              <div class="card-body">
                <center>
                  <h5 class="card-title" style="color: white">Rutina Trapecios</h5>
                  <a href="#" class="btn btn-warning" data-target="#produk7" data-toggle="modal">Detalles</a>
                  <hr style="background-color:white">
                </center>
              </div>
            </div>
            <div class="card" style="background-color:rgba(58, 51, 51, 0)">
              <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
                <a href="#">
                  <hr style="background-color:white">
                  <img
                    src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/11/18/17/crawling-istock.jpg"
                    width="250" height="200">
                </a>
              </button>
              <div class="card-body">
                <center>
                  <h5 class="card-title" style="color: white">Rutina Antebrazo </h5>
                  <a href="#" class="btn btn-warning" data-target="#produk8" data-toggle="modal">Detalles</a>
                  <hr style="background-color:white">
                </center>
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
                    <img
                      src="https://www.cambiatufisico.com/wp-content/uploads/rutina-pecho-pectoral-superior-1068x612.jpg"
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
                  <img src="https://i.blogs.es/9fd2bd/image_preview/450_1000.jpeg" width="350" height="300">
                </div>
                <div class="col-md-6">
                  <table class="table table-borderless">
                    <tr>
                      <th>Nombre Rutina:</th>
                      <td>Espalda</td>
                    </tr>
                    <tr>
                      <th>Duración: </th>
                      <td>2 Semanas </td>
                    </tr>
                    <tr>
                      <th>Repeticiones:</th>
                      <td>De 2 a 4 series de 10 repeticiones cada una.</td>
                    </tr>
                    <tr>
                      <th>Descripción:</th>
                      <td>El desarrollo de una espalda ancha y voluminosa puede mejorar enormemente tu aspecto físico.
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
                <img
                  src="https://cdn2.actitudfem.com/media/files/styles/large/public/images/2018/12/rutina-ejercicio-pierna.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Rutina:</th>
                    <td>Pierna</td>
                  </tr>
                  <tr>
                    <th>Duración: </th>
                    <td>2 Semanas </td>
                  </tr>
                  <tr>
                    <th>Repeticiones:</th>
                    <td>De 5 a 7 series de 10 repeticiones cada una.</td>
                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td>Entrenamiento para definir y tonificar vuestras piernas, y conseguiremos un tono muscular más
                      estético y desarrollado.</td>
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
                <img src="https://www.cambiatufisico.com/wp-content/uploads/ejercicios-triceps-1068x601.jpg" width="350"
                  height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Rutina:</th>
                    <td>Triceps</td>
                  </tr>
                  <tr>
                    <th>Duración: </th>
                    <td>4 Semana </td>
                  </tr>
                  <tr>
                    <th>Repeticiones:</th>
                    <td>De 3 a 4 series de 12 repeticiones cada una.</td>
                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td>En las siguientes rutinas se sigue en general el método de la pirámide ascendente, consiste en
                      comenzar con mucho peso e incrementar gradualmente éstas mientras reduces el peso.</td>
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
                <img
                  src="https://www.sportlife.es/media/cache/original/upload/images/imagegallery/5646/imagenes/imagegallery-5646-5943b5481c76e.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Rutina:</th>
                    <td>Hombro</td>
                  </tr>
                  <tr>
                    <th>Duración: </th>
                    <td>2 Semanas </td>
                  </tr>
                  <tr>
                    <th>Repeticiones:</th>
                    <td>De 5 a 8 series de 10 repeticiones cada una.</td>
                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td>El hombro es el músculo que más forma da al cuerpo. Por ese motivo, deben recibir un buen
                      entrenamiento.</td>
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
                <img src="https://www.cambiatufisico.com/wp-content/uploads/rutina-biceps1-1068x601.jpg" width="350"
                  height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Rutina:</th>
                    <td>Biceps</td>
                  </tr>
                  <tr>
                    <th>Duración: </th>
                    <td>5 Semanas </td>
                  </tr>
                  <tr>
                    <th>Repeticiones:</th>
                    <td>De 4 a 6 series de 20 repeticiones cada una.</td>
                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td>Está rutina para volumen muscular de los bíceps.</td>
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
                <img src="https://cdn.kiwilimon.com/ss_secreto/1384/th5-640x426-1384.jpg" width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Rutina:</th>
                    <td>Trapecios</td>
                  </tr>
                  <tr>
                    <th>Duración: </th>
                    <td>3 Semanas </td>
                  </tr>
                  <tr>
                    <th>Repeticiones:</th>
                    <td>De 4 a 5 series de 8 repeticiones cada una.</td>
                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td>Uno de los deseos de la mayoría que acudimos al gimnasio es vernos los trapecios bien formados,
                      para ello esta rutina busca volumen muscular.</td>
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


    <div class="modal fade" id="produk8" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
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
                <img
                  src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2016/11/18/17/crawling-istock.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Rutina:</th>
                    <td>Antebrazo</td>
                  </tr>
                  <tr>
                    <th>Duración: </th>
                    <td>5 Semanas </td>
                  </tr>
                  <tr>
                    <th>Repeticiones:</th>
                    <td>De 3 a 5 series de 10 repeticiones cada una.</td>
                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td>Los antebrazos son una parte de nuestro cuerpo muy importante al practicar Calistenia. A pesar
                      de ser tan importantes en ocasiones no se les dedica una rutina específica a estos músculos.</td>
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