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
    <title>Cambio de contraseña</title>
</head>

<body>

    <body background="https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
            <a class="navbar-brand" href="#"><img
                    src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png" width="190" height="70"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>

        </nav>

        <br><br><br><br><br><br><br><br>
        <center>
            <div class="card" style="width: 30rem; background-color:rgba(0, 0, 0, 0.61)">
                <div class="card-body">
                    <br>
                    <h1 style="color: white">Cambio de contraseña</h1>
                    <br>
                    <form action="controlador_cc.php" method="post">

                        <div class="form-group">
                            <div class="d-flex bd-highlight sm-1">
                                <div class="p-4 bd-highlight">
                                </div>
                                <div class="p-1 bd-highlight">
                                    <h6 style="color: white">Contraseña antigua</h6>
                                </div>
                            </div>
                            <input name="n1" type="password" class="form-control"
                                placeholder="contraseña antigua" style="width: 20rem" required="required">
                        </div>

                        <div class="form-group">
                            <div class="d-flex bd-highlight sm-1">
                                <div class="p-4 bd-highlight">
                                </div>
                                <div class="p-1 bd-highlight">
                                    <h6 style="color: white">Contraseña nueva</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="n2" type="password" class="form-control"
                                    placeholder="contraseña nueva" style="width: 20rem" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex bd-highlight sm-1">
                                <div class="p-4 bd-highlight">
                                </div>
                                <div class="p-1 bd-highlight">
                                    <h6 style="color: white">Confirmar contraseña</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="n3" type="password" class="form-control" placeholder="Verificar"
                                    style="width: 20rem" required="required">
                            </div>
                        </div>

                        <div class="form-group">
                            <div align="center">
                                <div class="d-flex bd-highlight mb-3">
                                    <div class="p-4 bd-highlight">
                                    </div>

                                    <div class="p-2 bd-highlight">

                                        <button class="btn btn-warning btn-block my-4 my-sm-6" type="submit"
                                            style="width: 10rem; background-color:yellow; ">
                                            <font size=5>Guardar</font>
                                        </button>
                    </form>
                </div>
                <div class="p-2 bd-highlight">
                    <form action="controlador_cc.php">
                        <button class="btn  btn-block my-4 my-sm-6" type="submit"
                            style="width: 10rem; background-color:rgb(134, 134, 134); ">
                            <font size=5>Cancelar</font>
                        </button>
                    </form>

                </div>
            </div>
            </div>
            </div>

            <a class="navbar-brand" href="#"><img
                    src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png" width="190" height="70"></a>
            </div>
            </div>
        </center>

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