<?php
require "classConnectionMySQL.php";

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
    <title>Tienda</title>
</head>

<body>

    <body
        background=http://www.perusmart.com/wp-content/uploads/2014/03/gris-hq-fondo-peque-a-sombra-diagonal-x-7741311.jpg>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
        <a class="navbar-brand" href="../Usuario/zonas.html"><img src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png"
                width="190" height="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form action="../CarroCompras/CarroCompras.php">
                <button class="btn  my-2 my-sm-0 mr-2" type="submit" style="background-color:yellow; width: 7rem; ">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
            </form>
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
                <form action="../Usuario/Tienda.php">
                    <button class="btn my-2 my-sm-0 mr-auto" type="submit"
                        style="background-color:yellow; width: 7rem; ">
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

        
        <br><br><br><br>
        <div class="col-md-15">
            <h1 class="text-center font-weight-bold m-4" style="color: white">PRODUCTOS</h1>
        </div>
        


        <div class="container-fluid"
            style="background-image:url(http://www.perusmart.com/wp-content/uploads/2014/03/gris-hq-fondo-peque-a-sombra-diagonal-x-7741311.jpg)">
            <div align="center">
                <div class="col-lg row mx-auto">
                    <div class="card-group">
                        <?php
                            $con1 = new ConnectionMySQL();                                                                                                                                                                                                                                      
                            $con = $con1->Conectar();
                            $z = 4;

                            $a = "SELECT * FROM fgs_producto WHERE id_producto<=$z";

                            $sql = mysqli_query($con, $a);
					        $no = 1;
					        while($row = mysqli_fetch_assoc($sql)){
                                echo '
                                <div class="card mr-5 ml-2"
                                    style="width: 25rem; height: 35rem; background-color:rgba(128, 128, 128, 0)">
                                    
                                    <img src="'.$row['imagen_producto'].'"
                                        class="card-img-top" alt="..."  height="250rem" width="10rem">
                                    <div class="card-body " style="background-color: rgba(128, 128, 128, 0)">
                                        <h5 class="card-title" style="color: white">'.$row['nombre_producto'].'</h5>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star-o text-warning" aria-hidden="true"></i><br>
                                        <a href="#" class="btn btn-success" data-target="#'.$row['id_producto'].'"
                                            data-toggle="modal">Detalles</a>
                                        <a href="#" class="btn btn-danger">$83.900</a>
                                    </div>
                                </div>
                                ';
                                
                            }
                        ?>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="container-fluid"
                        style="background-image:url(http://www.perusmart.com/wp-content/uploads/2014/03/gris-hq-fondo-peque-a-sombra-diagonal-x-7741311.jpg)">
                        <div align="center">
                        <div class="row col-lg mx-auto mt-5">
                        <div class="card-group">
                        <?php
                            $con1 = new ConnectionMySQL();                                                                                                                                                                                                                                      
                            $con = $con1->Conectar();

                            $a = "SELECT * FROM fgs_producto WHERE id_producto>4";

                            $sql = mysqli_query($con, $a);
					        $no = 1;
					        while($row = mysqli_fetch_assoc($sql)){
                                echo '
                                <div class="card mr-5 ml-2"
                                    style="width: 25rem; height: 35rem; background-color:rgba(128, 128, 128, 0)">
                                    
                                    <img src="'.$row['imagen_producto'].'"
                                        class="card-img-top" alt="..."  height="250rem" width="10rem">
                                    <div class="card-body " style="background-color: rgba(128, 128, 128, 0)">
                                        <h5 class="card-title" style="color: white">'.$row['nombre_producto'].'</h5>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o text-warning" aria-hidden="true"></i>
                                        <i class="fa fa-star-o text-warning" aria-hidden="true"></i><br>
                                        <a href="#" class="btn btn-success" data-target="#'.$row['id_producto'].'"
                                            data-toggle="modal">Detalles</a>
                                        <a href="#" class="btn btn-danger">$83.900</a>
                                    </div>
                                </div>
                                ';
                                
                            }
                        ?>
                        </div>
                        </div>
                        </div>
                        </div>
                        
                        <?php
                            $con1 = new ConnectionMySQL();                                                                                                                                                                                                                                      
                            $con = $con1->Conectar();

                            $a = "SELECT * FROM fgs_producto WHERE id_producto";

                            $sql = mysqli_query($con, $a);
                            while($row = mysqli_fetch_assoc($sql)){
                                echo '
                                <div class="modal fade" id="'.$row['id_producto'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalScrollableTitle">Detalles del Producto</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="'.$row['imagen_producto'].'"
                                                            alt="" style="height: 25rem; width: 25rem;">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <table class="table table-borderless">
                                                            <tr>
                                                                <th>Nombre del Producto</th>
                                                                <td>'.$row['nombre_producto'].'</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Marca</th>
                                                                <td>'.$row['marca'].'</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Valoración del Producto</th>
                                                                <td>
                                                                    <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                    <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                    <i class="fa fa-star text-success" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
                                                                    <i class="fa fa-star-o text-success" aria-hidden="true"></i><br>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Fecha vencimiento</th>
                                                                <td>'.$row['fecha_vencimiento_producto'].'</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Precio</th>
                                                                <td>'.$row['precio'].'</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="" method="post">
                                                    <button type="submit" name="n1" value="1" class="btn btn-danger" >VOLVER</button>
                                                </form>                                                
                                                <form action="controlador_ti.php" method="post">
                                                    <button type="submit" name="n1" value="'.$row['id_producto'].'" class="btn btn-primary" >AÑADIR AL CARRO</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                ';
                            }
                        ?>
                        

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
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" style="color: white">
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
                                <a href="#!" style="color:white"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    Email:
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
                                <a href="#!" style="color:white"><i class="fa fa-facebook-official"
                                        aria-hidden="true"></i>
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