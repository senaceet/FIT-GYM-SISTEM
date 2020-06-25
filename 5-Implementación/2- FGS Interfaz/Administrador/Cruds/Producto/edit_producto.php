
<?php
include ("classConnectionMySQL.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Editar Producto</title>
</head>
<body>
<body background="https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg" >
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00000000;" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav> 
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

	<div class="container">
		<div class="content">
			<h2 style="color: rgb(112, 200, 216)">Editar Dietas</h2>
			<hr />
			
			<?php
            $con1 = new ConnectionMySQL();                                                                                                                                                                                                                                      
			$con = $con1->Conectar();
			
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM fgs_producto WHERE id_producto='$nik'");
			if(mysqli_num_rows($sql) == 0){;
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form method="post" action="controlador_producto_ed.php" >
				<div class="form-group">
					<label class="col-sm-3 control-label" style="color: rgb(112, 200, 216)">ID</label>
					<div class="col-sm-2">
						<input type="text" name="n1" value="<?php echo $row ['id_producto']; ?>" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" style="color: rgb(112, 200, 216)">Nombre producto</label>
					<div class="col-sm-4">
						<input type="text" name="n2" value="<?php echo $row ['nombre_producto']; ?>" class="form-control"  required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" style="color: rgb(112, 200, 216)">Imagen producto</label>
					<div class="col-sm-4">
						<input type="text" name="n3" value="<?php echo $row ['imagen_producto']; ?>" class="form-control"  required>
						<br>
						<?php
							echo '
							<img src="'.$row['imagen_producto'].'" width="100">
							'
						?>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" style="color: rgb(112, 200, 216)">Fecha Vencimiento (aaaa/mm/dd)</label>
					<div class="col-sm-4">
						<input type="text" name="n4" value="<?php echo $row ['fecha_vencimiento_producto']; ?>" class="form-control"  required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" style="color: rgb(112, 200, 216)">Precio</label>
					<div class="col-sm-4">
						<input type="text" name="n5" value="<?php echo $row ['precio']; ?>" class="form-control"  required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" style="color: rgb(112, 200, 216)">Marca</label>
					<div class="col-sm-4">
						<input type="text" name="n6" value="<?php echo $row ['marca']; ?>" class="form-control"  required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" style="color: rgb(112, 200, 216)">Proveedor</label>
					<div class="col-sm-3">
						<select type="text" name="n7"  class="form-control" placeholder="Proveedor" required>
                        <?php
                            $selec= "SELECT primer_nombre_proveedor FROM fgs_proveedor";
                            $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
                            $con2 = $con->Conectar(); 
                            $a = mysqli_query($con2, $selec);
                            
                            
                            while($b=mysqli_fetch_array($a))
                                {

                                echo "<option>" . $b["primer_nombre_proveedor"] . "</option>";
                            
                                }
                        ?>
                </select>
                    </div>
				</div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="crud_producto.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>

</body>
</html>
