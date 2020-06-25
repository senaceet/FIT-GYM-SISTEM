<?php
require_once "classConnectionMySQL.php";

session_start();
$usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
​
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://fotos.subefotos.com/9640a8c7f1cf1f3c8285117969372a04o.png">

  <title>Carro de Compras</title>
</head>
​
<body>
​
  <body background="https://i.pinimg.com/originals/bc/76/e8/bc76e8c5fc0e507e81c8407f198c8cf7.jpg">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgb(0, 0, 0);">
      <a class="navbar-brand" href="../Usuario/zonas.php"><img src="https://fotos.subefotos.com/a82e1777733e3cf17ca85cb3eaf3c540o.png"
          width="190" height="70"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
​
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
            <a class="dropdown-item" href="../Usuario/index.php"
              style="color: black">Cerrar sesión</a>
          </div>
        </div>
        <div class="nav-item" style="width: 4rem">
          </div>
        </form>
      </div>
    </nav>
​
    <br><br><br><br>
    <center>
      <br>
​
​

<?php

$con1 = new ConnectionMySQL();                                                                                                                                                                                                                                      
$con = $con1->Conectar();

if(isset($_GET['aksi']) == 'delete'){
  // escaping, additionally removing everything that could be (html/javascript-) code
  $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
    $delete = mysqli_query($con, "DELETE FROM FGS_carro_producto WHERE id_carro_producto='$nik'");
    if($delete){
      echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
    }else{
      echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
    }
  }


$a = "SELECT * FROM FGS_carro_producto
JOIN FGS_producto ON FGS_producto.id_producto = FGS_carro_producto.id_producto  
WHERE id_carro_compras = $usuario ";


$sql = mysqli_query($con, $a);

while($row = mysqli_fetch_assoc($sql)){
  echo '
<div class="container" style="background: transparent" >
            <div class="row no-gutters">
                <aside class="col-sm-3 border-right">
        
        <article class="gallery-wrap"> 
        <div class="img-big-wrap">
            <br>
            <br>
            <br>
          <center><div><img src="'.$row['imagen_producto'].'" width="240px"></div></center>
        </div> 
        </article> 
                </aside>
                <aside class="col-sm-4">
        <article class="p-6 ml-5">
            <br><br>
           
            <h4 style="color:yellow";>'.$row['nombre_producto'].'</h4>
        <dl>
          <h5 style="color:yellow";>Fecha Vencimiento</h5>
        <dl>
         
          <h6 style="color:rgb(255, 254, 254)";>'.$row['fecha_vencimiento_producto'].'</h6>
        </dl>

        <dl>
          <h5 style="color:yellow";>Marca</h5>
        <dl>
         
          <h6 style="color:rgb(255, 254, 254)";>'.$row['marca'].'</h6>
        </dl>
        
        </article> 
                </aside> 
                <aside class="col-sm-5">
                        <article class="p-5">
                                <div class="row">
                                        <div class="col-sm-1">
                                            <dl class="dlist-inline">
                                              
                                                  </select>
                                              </dd>
                                            </dl> 
                                        </div> 
                                        <div class="col-sm-8">
                                          <br>
                                          <br>
                                          <br>
                                            <dl class="dlist-inline ">
                                                  <dt style="color: white">Precio por unidad</dt>
                                            <h4 class="price-wrap" style="color: white"><span class="price">'.$row['precio'].'</span></h4>
                                            </dl>  
                                        </div> 
                                        <div class="col-sm-3"> 
                                          <br>
                                          <br>
                                          <br>
                                          <a href="CarroCompras.php?aksi=delete&nik='.$row['id_carro_producto'].'" title="Eliminar" onclick="return confirm(\'¿Esta seguro de borrar la cita número '.$row['id_carro_producto'].'?\')" class="btn btn-danger btn-sm"><i class="material-icons">Eliminar</i></a>
                                        </div>
                                    </div> 
                    </article>
                </aside>
            </div> 
        </div> 
    </div> 
    <br> 
    ';
}
    ?> 
    <br>   
<br>
<a href="compra.php">
  <button class="btn btn-warning" type="submit"
      style="background-color:yellow; width: 15rem; height: 3rem; ">
      <h6 style="color:rgba(0, 0, 0, 0.952)" ;>
          <font size=5>Comprar</font>
      </h6>
  </button>
  </a>
  <br><br>
</div>    
<br>   
</body>
</html>