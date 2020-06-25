<?php
require "classConnectionMySQL.php";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Insertar Proveedor</title>
    <style type="text/css">
    body {
        color: #566787;
		background-image: url("https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg");
 		background-color: #cccccc;
		background-repeat: no-repeat;
  		background-size: 1700px 1000px;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
			<a class="navbar-brand" href="#"><img
					src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png" width="190" height="70"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				</ul>
				<form action="../Proveedores/crud_proveedores.php">
					<button class="btn  my-2 my-sm-0 mr-2" type="submit" style="background-color:yellow; width: 7rem; ">
						Proveedores
					</button>
				</form>
				<form action="../Rutinas/crud_rutinas.php">
					<button class="btn  my-2 my-sm-0 mr-2" type="submit" style="background-color:yellow; width: 7rem; ">
						Rutinas
					</button>
				</form>
				<div class="nav-item">
					<form action="../Dietas/crud_dietas.php">
						<button class="btn my-2 my-sm-0 mr-2" type="submit"
							style="background-color:yellow; width: 7rem; ">
							Dietas
						</button>
					</form>
				</div>
				<div class="nav-item">
					<form action="../Usuarios/crud_usuarios.php">
						<button class="btn my-2 my-sm-0 mr-2" type="submit"
							style="background-color:yellow; width: 7rem; ">
							Usuarios
						</button>
					</form>
				</div>
				<div class="nav-item">
					<form action="../Producto/crud_Producto.php">
						<button class="btn my-2 my-sm-0 mr-auto" type="submit"
							style="background-color:yellow; width: 7rem; ">
							Productos
						</button>
					</form>
				</div>
				<div class="nav-item">
					<form action="../Envios/crud_envio.php">
						<button class="btn my-2 my-sm-0 mr-auto" type="submit"
							style="background-color:yellow; width: 7rem; ">
							Envios
						</button>
					</form>
				</div>
				<div class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
						style="color: rgb(255, 255, 255)">
						<img src="https://miro.medium.com/max/1024/1*qCK3jujB-3n_ISgNvnJ2Pg.jpeg" width="40"
							height="40">
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href=""
							style="color: black">Editar perfil</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="https://fgsadministrador.000webhostapp.com/index.html"
							style="color: black">Cerrar sesión</a>
					</div>
				</div>
				<div class="nav-item" style="width: 4rem">
					</div>
				</form>
			</div>
		</nav>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00000000;" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav> 
    
<center>
  <br><br><br><br>
<div class="card" style="width: 28rem; background-color:rgba(255, 255, 255, 0.89)"  >
    <div class="card-body" >
        <br>
        <h1 style="color:black;"> Proveedores </h1>
        <form method="post" action="controlador_proveedores_in.php" >

                <div class="form-group">
                <label for="fecha">id_Proveedor:</label>
                    <input type="text" name="n1" class="form-control"  placeholder="ID" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>
                <div class="form-group">
                <label for="">Primer Nombre Proveedor:</label>
                    <input type="text" name="n2" class="form-control"  placeholder="Pimer Nombre" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div> 
                <div class="form-group">
                <label for="">Segundo Nombre Proveedor:</label>
                    <input type="text" name="n3" class="form-control"  placeholder="Segundo Nombre" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" >
                </div>
                <div class="form-group">
                <label for="">Primer Apellido Proveedor</label>
                    <input type="text" name="n4" class="form-control"  placeholder="Primer Apellido" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>
				<div class="form-group">
                <label for="">Segundo Apellido Proveedor</label>
                    <input type="text" name="n5" class="form-control"  placeholder="Segundo Apellido" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>    
				<div class="form-group">
                <label for="">Numero de Telefono</label>
                    <input type="text" name="n6" class="form-control"  placeholder="Telefono" style="width: 20rem; background-color:rgb(255, 255, 255); color: black" required="required">
                </div>       
                <div class="controls">
            <div align="center"> 
                
                <button class="btn  btn-block my-4 my-sm-6"  type="submit" style="width: 20rem; background-color:yellow; "><font size=5>REGISTRAR</font></button>
                
              </div>
            </form>
          
           

 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>        
</body>
</html>

