<?php
include ("classConnectionMySQL.php");

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
    <title>Editar perfil</title>
</head>

<body background="https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
        <a class="navbar-brand" href="../Usuario/zonas.php"><img
                src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png" width="190" height="70"></a>
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
                    <a class="dropdown-item" href="../Usuario/Carrito_fgs.php"
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

    <nav class="navbar navbar-dark" style="background-color: #3f111100;"></nav>

    </nav>
    <br><br><br><br><br>

    <div class="container">
        <div class="d-flex justify-content-center h-20">
            <div class="card col-lg" style="background-color: rgba(32, 10, 10, 0); width: 50rem">
                <div class="card-header">
                    <div class="d-flex bd-highlight mb-4">
                        <div class="p-2 bd-highlight" style="color: white">
                            <h1 style="color: white">
                                <font size=7>Configuración</font>
                            </h1>
                        </div>
                        <div class="ml-auto bd-highlight" style="color: white">
                            <div class="form-group">
                                <br>
                                
                                <a href="../Usuario/zonas.php">
                                    <button class="btn btn-danger" type="submit" style=" width: 9rem; height: 3rem; ">
                                        <h6 style="color:rgba(255, 255, 255, 0.952)" ;>
                                            <font size=5>Cancelar</font>
                                        </h6>
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <center>
                                    <img src="https://miro.medium.com/max/1024/1*Age2mlAUaGBPNWcLvQPEUA.jpeg"
                                        width="270" height="270">
                                    <br><br>
                                    <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Estado físico</strong>
                                    </h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">Buen estado</div>
                                    </div>
                                </center>
                            </div>

                            <?php
                                $con1 = new ConnectionMySQL();                                                                                                                                                                                                                                      
                                $con = $con1->Conectar();
    
                                $sql = mysqli_query($con, "SELECT * FROM fgs_usuario WHERE numero_documento=$usuario");
                                if(mysqli_num_rows($sql) == 0){;
                                }else{
                                    $row = mysqli_fetch_assoc($sql);
                                }
                                
                                
                                if(isset($_GET['pesan']) == 'sukses'){
                                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
                                }
                            ?>
                        
                            <form method="post" action="controlador_ed.php" >    
                            <div class="form-group" style="width: 30rem">   
                                <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Numero documento</strong></h6>
                                    <input type="text" class="form-control " height="100rem" name="n1" value="<?php echo $row['numero_documento']; ?>">
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Primer Nombre Usuario</strong></h6>
                                    <input type="text" class="form-control " height="100rem" name="n2" value="<?php echo $row['primer_nombre_usuario']; ?>">
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Segundo Nombre Usuario</strong></h6>
                                    <input type="text" class="form-control" name="n3" value="<?php echo $row['segundo_nombre_usuario']; ?>">
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Primer Apellido Usuario</strong></h6>
                                    <input type="text" class="form-control" name="n4" value="<?php echo $row['segundo_apellido_usuario']; ?>">
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Segundo Apellido Usuario</strong></h6>
                                    <input type="text" class="form-control" name="n5" value="<?php echo $row['segundo_apellido_usuario']; ?>">
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Correo Electrónico</strong></h6>
                                <input type="text" class="form-control" name="n6" value="<?php echo $row['correo_usuario']; ?>">
                            </div>
                            <div class="form-group">
                                <h6 style="color:rgba(255, 255, 255, 0.952)" ;><strong>Tipo de documento</strong></h6>
                                <div class="form-group" style="width: 12rem">
                                <select class="form-control form-control-sm" name="n7" style="background-color: rgba(255, 255, 255, 0); color: white" required="required">
                                    <?php
                                        $selec= "SELECT nombre_documento FROM fgs_tipo_documento";
                        
                                        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
                                        $con2 = $con->Conectar(); 

                                        $a = mysqli_query($con2, $selec);
                                        
                                        
                                        while($b=mysqli_fetch_array($a))
                                            {
                                            echo "<option style='color:black'>" . $b["nombre_documento"] . "</option>";
                                            }
                                        
                                    ?>
                                <select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-flex bd-highlight mb-3" style="width: 10rem">
                                    <div class="p-2 bd-highlight" style="color: white">
                                        <div class="form-group" style="width: 6rem">
                                            <label for="name" style="color: white">Peso (Kg)</label>
                                            <input type="text" class="form-control" name="n8" value="<?php echo $row['peso_usuario']; ?>">
                                        </div>
                                    </div>
                                    <div class="ml-auto p-2 bd-highlight" style="color: white">
                                        <div class="form-group" style="width: 6rem">
                                            <label for="name" style="color: white">Estatura (M)</label>
                                            <input type="text" class="form-control" name="n9" value="<?php echo $row['estatura_usuario']; ?>">
                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight" style="color: white">
                                        <div class="form-group" style="width: 6rem">
                                            <label for="idioma" style="color: white">RH+ </label>
                                            <select class="form-control form-control-sm" name="n10"
                                                style="background-color: rgba(255, 255, 255, 0); color: white;">
                                                <option style='color:black'><?php echo $row["tipo_sangre_usuario"] ?></option>
                                                <option style="color: black">A+</option>
                                                <option style="color: black">A-</option>
                                                <option style="color: black">B+</option>
                                                <option style="color: black">B-</option>
                                                <option style="color: black">O+</option>
                                                <option style="color: black">O-</option>
                                                <option style="color: black">AB</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <a href="controlador_ed.php">
                                    <button class="btn btn-success" type="submit" style="width: 9rem; height: 3rem; ">
                                        <h6 style="color:rgba(255, 255, 255, 0.952)" ;>
                                            <font size=5>Guardar</font>
                                        </h6>
                                    </button>
                                </a>
                            </div>
                        </div>
                        </form>
                        <hr>
                        
                        <div class="row align-items-center"></div>
                        <br>
                        <center>
                            <div class="form-group">
                                <a href="#" class="btn btn-warning" data-target="#produk1" data-toggle="modal"
                                    style="background-color:yellow; width: 12rem; height: 3rem; ">
                                    <h6 style="color:rgba(0, 0, 0, 0.952)" ;>
                                        <font size=5>Eliminar perfil</font>
                                    </h6>
                                </button>
                                </a>
                                <a href="../Usuario/cambioc.php">
                                <button class="btn btn-warning" type="submit"
                                    style="background-color:yellow; width: 15rem; height: 3rem; ">
                                    <h6 style="color:rgba(0, 0, 0, 0.952)" ;>
                                        <font size=5>Cambiar contraseña</font>
                                    </h6>
                                </button>
                                </a>
                            </div>
                        </center>
                    </div>
                    </form>
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
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Eliminar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <center>
                                <div class="col-md-6">
                                    <table class="table table-borderless">
                                        <h2>Estas por eliminar tu cuenta de FIT GYM SYSTEM, volverás a la página de inicio </h2>
                                        <br>
                                        <h2>¿Seguro qué quieres eliminar tú cuenta?</h2>
                                    </table>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="modal-content">
                            <div class="d-flex bd-highlight " >
                                    <div class="p-2 bd-highlight" style="color: white">
                        <a href="../Usuario/index.php">
                            <button type="button" class="btn btn-warning" style="width: 13rem">Aceptar</button>
                        </a>
                                    </div>
                                    <div class="p-2 bd-highlight" style="color: white">
                        <a href="../Usuario/Editar_perfil.php">
                            <button type="button" class="btn btn-danger" style="width: 13rem">Cancelar</button>
                        </a>
                    </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

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
</body>

</html>