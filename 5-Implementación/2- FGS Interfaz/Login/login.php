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
    <title>Iniciar Sesión</title>
</head>

<body>
    <body background="http://www.perusmart.com/wp-content/uploads/2014/03/gris-hq-fondo-peque-a-sombra-diagonal-x-7741311.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
        <a class="navbar-brand" href="https://fgsusuario.000webhostapp.com/Usuario/index.html"><img src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png"
                width="190" height="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div class="nav-item">
                <form action="../registro/registro.php">
                    <button class="btn my-2 my-sm-0 mr-auto" type="submit" style="background-color:yellow ">
                        Registrarse
                    </button>
            </div>
            </form>
        </div>

    </nav>
    <br><br><br><br><br><br><br><br>

  
    <center>
        <section class="login-block">
            <div class="container">
            <div class="row"> 
                <div class="col-md-4 login-sec">
                    <h2  style="color:rgb(255, 230, 0)";>Accede a tu espacio</h2> 
                    
                    <hr style="background-color:gray">
                    <br>
          <form method="post" action="controlador_log.php" >
          <div class="form-group">
            <input type="text" name="n1" class="form-control" placeholder="Correo Electronico" required="required">
            
          </div>

          <div class="form-group">
            <input type="password" name="n2" class="form-control" placeholder="Contraseña" required="required">
          </div>
                <div class="form-group">
                <div align="center">
                    
                        <button class="btn btn-warning btn-block my-4 my-sm-6" type="submit"
                            style="width: 20rem; background-color:yellow; ">
                            <font size=5>Iniciar sesión</font>
                        </button>
                    
                </div>
                </div>
            </form>
            
            
            <div class="d-flex bd-highlight mb-3" style="width: 20rem">
                <div class="p-2 bd-highlight" style="color: white">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
                        <label class="custom-control-label" for="defaultChecked2">Recuérdame</label>
                    </div>
                </div>
                <div class="ml-auto p-2 bd-highlight" style="color: white"> <a href="https://fgsusuario.000webhostapp.com/Usuario/olvidoC.html" style="color: rgb(255, 208, 0)">¿Olvidé mi contraseña?</a></div>
            </div>
        
            <div style="width: 20rem">
                <h6 style="color: white">¿Eres nuevo? <a
                        href="../registro/registro.php"
                        style="color: white">Registrate.</a></h6>
            </div>
            <hr style="background-color:gray">
        </div>
        <div class="row" > 
        <img width="700" height="380" src="https://www.lavanguardia.com/r/GODO/LV/p7/WebSite/2020/03/10/Recortada/img_omunoz_20181224-174007_imagenes_lv_terceros_gimnasio_dir-k7RB-3IJMAMX1LKGWVYXM-992x558@LaVanguardia-Web.jpg">
                </div>
    </div>
    </center>   
    <div>
      
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
    
        </div>
</body>

</html>