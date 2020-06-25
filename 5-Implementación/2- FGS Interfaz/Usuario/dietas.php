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
  <title>Dietas</title>
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
            src="https://www.eltiempo.com/files/article_main/uploads/2019/03/02/5c7b1c0643f4e.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://images.clarin.com/2016/08/01/SyWsSihtNe_1256x620.jpg"
            alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="https://www.ecestaticos.com/imagestatic/clipping/5bd/e0b/5bde0bc9cc09b11bacba9ac10a75c68f/asi-podras-adelgazar-cinco-kilos-de-manera-facil-y-duradera.jpg?mtime=1566905443"
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


    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <div class="card" style="background-color:rgba(58, 51, 51, 0);">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img
                  src="https://as.com/deporteyvida/imagenes/2018/05/03/portada/1525334231_410962_1525334326_noticia_normal.jpg"
                  width="300" height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Dieta Mediterrania</h5>
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
                <img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/F961/production/_108614836_veganfood.jpg"
                  width="300" height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Dieta Vegetariana</h5>
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
                <img src="https://dietaconexito.com/wp-content/uploads/2019/05/dietas-para-adelgazar.jpg" width="300"
                  height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Dieta para adelgazar</h5>
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

          <div class="card" style="background-color:rgba(58, 51, 51, 0)">
            <button type="button" class="btn" style="background:rgba(245, 245, 245, 0)">
              <a href="#">
                <hr style="background-color:white">
                <img src="https://m.elmostrador.cl/media/2018/04/dieta-DASH.jpeg" width="300" height="250">
              </a>
            </button>

            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Dieta Dash</h5>
                <a href="#" class="btn btn-warning" data-target="#produk5" data-toggle="modal">Detalles</a>
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
                <img src="https://misrecetasymas.com/wp-content/uploads/2017/04/dieta-segun-tu-tipo-de-sangre.jpg"
                  width="300" height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Dieta tipo de Sangre</h5>
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
                <img
                  src="https://static.wixstatic.com/media/2afc5f_241e867059a84c32b874d3026cf83a0e~mv2.jpg/v1/fill/w_297,h_215,al_c,q_80,usm_0.66_1.00_0.01/2afc5f_241e867059a84c32b874d3026cf83a0e~mv2.jpg"
                  width="300" height="250">
              </a>
            </button>
            <div class="card-body">
              <center>
                <h5 class="card-title" style="color: white">Dieta Blanda</h5>
                <a href="#" class="btn btn-warning" data-target="#produk7" data-toggle="modal">Detalles</a>
                <hr style="background-color:white">
              </center>
            </div>
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
                <img
                  src="https://as.com/deporteyvida/imagenes/2018/05/03/portada/1525334231_410962_1525334326_noticia_normal.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Dieta:</th>
                    <td>Dieta Mediterran</td>

                  </tr>
                  <tr>
                    <th>Descripción:</th>
                    <td> Se resume en reducir el consumo de carnes e hidratos de carbono en beneficio de más
                      alimentos vegetales y grasas monoinsaturadas.
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
                <img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/F961/production/_108614836_veganfood.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Dieta:</th>
                    <td>Dieta vegetarianas</td>
                  </tr>
                  <tr>

                  <tr>
                    <th>Descripción:</th>
                    <td>Las dietas vegetarianas se enfocan principalmente en el consumo de productos de origen vegetal
                      frutas, verduras, legumbres, hortalizas, semillas, granos.</td>
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
                <img src="https://dietaconexito.com/wp-content/uploads/2019/05/dietas-para-adelgazar.jpg" width="350"
                  height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Dieta:</th>
                    <td>Dieta para adelgazar</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>En esta clase de dietas hay infinidad de variantes, pero se puede decir que básicamente las
                      dietas para adelgazar se subdividen en:


                      <br>
                      -Dietas bajas en hidratos de carbono.
                      <br>
                      -Dietas bajas en grasas.
                      <br>
                      -Dietas bajas en calorías.
                      <br>
                      -Dietas proteicas, bajas en hidratos de carbono. </td>
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
                    <th>Nombre Dieta:</th>
                    <td>Dieta Dash</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>La dieta DASH es baja en sal y alta en frutas, vegetales, granos integrales, lácteos bajos en
                      grasas y proteínas magras</td>
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
                <img src="https://misrecetasymas.com/wp-content/uploads/2017/04/dieta-segun-tu-tipo-de-sangre.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Dieta:</th>
                    <td>Dieta tipo de Sangre</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>Segun tu tipo de sangre estos alimentos te ayudan a perder peso: algas marinas, pescados y
                      mariscos, hígado, carnes rojas, espinacas y brócoli.</td>
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
                <img
                  src="https://static.wixstatic.com/media/2afc5f_241e867059a84c32b874d3026cf83a0e~mv2.jpg/v1/fill/w_297,h_215,al_c,q_80,usm_0.66_1.00_0.01/2afc5f_241e867059a84c32b874d3026cf83a0e~mv2.jpg"
                  width="350" height="300">
              </div>
              <div class="col-md-6">
                <table class="table table-borderless">
                  <tr>
                    <th>Nombre Dieta:</th>
                    <td>Dieta Blanda</td>
                  </tr>
                  <tr>

                    <th>Descripción:</th>
                    <td>La dieta blanda es un tipo de dieta recomendada para mitigar problemas relacionados con el
                      aparato digestivo <br>-boca <br> -garganta <br> -estómago</td>
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