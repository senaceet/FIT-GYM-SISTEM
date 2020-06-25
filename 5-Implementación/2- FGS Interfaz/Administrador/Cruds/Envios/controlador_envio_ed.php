<?php
require "classConnectionMySQL.php";
require "modelo_envio_ed.php";
require "dao_envio.php";

$aa  = $_POST["n0"];
$a = $_POST["n1"];
$b = $_POST["n2"];


$mod= new Modelo_envio_ed( $aa, $a, $b);

$insertar = new Dao_envio();

$insert = $insertar->Modificar($mod);

    
?>
