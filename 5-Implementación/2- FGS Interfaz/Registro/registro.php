<?php
require "classConnectionMySQL.php";
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
    <title>Registrarse </title>
</head>

<body>

    <body background="https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
            <a class="navbar-brand" href="../Login/login.php"><img
                    src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png" width="190" height="70"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <div class="nav-item">
                    <form action="../Login/login.php">
                        <button class="btn my-2 my-sm-0 mr-auto" type="submit" style="background-color:yellow ">
                            Iniciar sesión
                        </button>
                </div>
                </form>
            </div>

        </nav>

        <div class="container-fluid"
            style="background-image:url(https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg)">
            
                <div class="row">
                    <div class="container">
                        <br><br><br>
                        <div class="row">
                            <div class="col-sm-1" style="background-color:rgba(197, 184, 184, 0)">
                            </div>
                            <div class="col-xl" style="background-color:rgba(197, 184, 184, 0)">
                                <br><br><br><br><br>
                                <h1 style="color: white">Datos Personales</h1>
                                <br>
                <form method="post" action="controlador_re.php" >

                <div class="form-group">
                    <label for="name" style="color: white">Numero de documento: </label>
                    <input type="text" name="n1" class="form-control" placeholder="Ingresar Numero de documento"  style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>
				
                <div class="form-group">
                    <label for="name" style="color: white">Primer Nombre: </label>
                    <input type="text" name="n2" class="form-control" placeholder="Ingresar Primer Nombre"  style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>  

                <div class="form-group">
                    <label for="name" style="color: white">Segundo Nombre: </label>
                    <input type="text" name="n3" class="form-control" placeholder="Ingresar Segundo Nombre"  style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>

                <div class="form-group">
                    <label for="name" style="color: white">Primer Apellido: </label>
                    <input type="text" name="n4" class="form-control" placeholder="Ingresar Primer Apellido" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>

                <div class="form-group">
                    <label for="name" style="color: white">Segundo Apellido: </label>
                    <input type="text" name="n5" class="form-control" placeholder="Ingresar Segundo Apellido" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>

                <div class="form-group" style="width: 20rem">
                    <label for="name" style="color: white">Correo Electrónico</label>
                    <input type="text" name="n6" class="form-control" placeholder="ejemplo@fgs.com" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>

                <div class="form-group">
                    <label for="name" style="color: white">Contraseña: </label>
                    <input type="password" name="n7" class="form-control" placeholder="Contraseña" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>
                                 
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
                    <label class="custom-control-label" for="defaultChecked2" style="color: white">He
                    leído y acepto los términos y condiciones de uso.</label>
                </div>
                </div>

                <div class="col-xl" style="background-color:rgba(197, 184, 184, 0)">
                    <br><br><br><br><br><br><br><br>

                    

                    <div class="form-group">
                        <label for="name" style="color: white">Fecha de nacimiento: </label>
                        <input type="date" name="n8" class="form-control" placeholder="Ingresar Segundo Apellido" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                    </div>

                    <div class="form-group">
                        <label for="name" style="color: white">Género: </label>
                        <select type="text" name="n9" class="form-control" placeholder="Genero" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                            <option>Seleccionar</option>
                            <option>Mujer</option>
                            <option>Hombre</option>
                        </select>
                    </div>

                    <div class="d-flex bd-highlight mb-3" style="width: 10rem">
                        <div class="p-2 bd-highlight" style="color: white">
                        <div class="form-group" style="width: 7rem">
                            <label for="name" style="color: white">Peso (Kg)</label>
                            <input type="number" name="n10" class="form-control" placeholder="Ej: (60)"
                                required="required">
                        </div>
                        </div>

                        <div class="ml-auto p-2 bd-highlight" style="color: white">
                        <div class="form-group" style="width: 7rem">
                            <label for="name" style="color: white">Estatura (M)</label>
                            <input type="number" name="n11" class="form-control" placeholder="Ej: (1.78)"
                                required="required">
                        </div>
                        </div>

                        <div class="p-2 bd-highlight" style="color: white">
                        <div class="form-group" style="width: 7rem">
                            <label for="idioma" style="color: white">RH+</label>
                            <select class="form-control form-control-sm" name="n12" id="idioma"
                                style="background-color: rgba(255, 255, 255, 0); color: white;"
                                required="required">
                                    <option>Seleccionar</option>
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

                        <div class="form-group" style="width: 20rem">
                            <label for="name" style="color: white">Numero de telefono</label>
                            <input type="text" name="n13" class="form-control" placeholder="Numero de telefono" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                        </div>
                        
                    <div class="d-flex bd-highlight mb-3" style="width: 28rem">

                        <div class="p-2 bd-highlight" style="color: white">
                        <div class="form-group" style="width: 9rem">
                            <label for="idioma" style="color: white">Tipo de Rol </label>
                            <select class="form-control form-control-sm" name="n14" style="background-color: rgba(255, 255, 255, 0); color: white" required="required">
                            <?php
                                $selec= "SELECT nombre_rol FROM fgs_rol WhERE id_rol > 1";
                  
                                $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
                                $con2 = $con->Conectar(); 

                                $a = mysqli_query($con2, $selec);
                                
                                
                                while($b=mysqli_fetch_array($a))
                                    {
                                    echo "<option style='color:black'>" . $b["nombre_rol"] . "</option>";
                                    }
                                
                            ?>
                            <select>
                        </div>
                        </div>
                    
                        <div class="p-2 bd-highlight" style="color: white">
                        <div class="form-group" style="width: 9rem">
                            <label for="idioma" style="color: white">Tipo Documento </label>
                            <select class="form-control form-control-sm" name="n15" style="background-color: rgba(255, 255, 255, 0); color: white" required="required">
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
                        </div>

                        <br>

                        <form action="">
                                <button class="btn my-2 my-sm-0 mr-auto" type="submit"
                                    style="background-color:yellow; width: 20rem ">
                                    <font size="6">Finalizar</font>
                                </button>
                            </form>

                        <div class="d-flex bd-highlight mb-3" style="width: 10rem">
                        
                        </div>  
                        </div>
                        </div>

                        <br><br>
                        
        </div>
        <div class="col-xl"
            style="background-image:url(https://www.lekue.com/wp/es/wp-content/uploads/sites/3/2018/03/rutina-gimnasio-5-dias.jpg); width: 30rem; height: 56rem;">
        </div>
        </div>
        </form>
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

</html>