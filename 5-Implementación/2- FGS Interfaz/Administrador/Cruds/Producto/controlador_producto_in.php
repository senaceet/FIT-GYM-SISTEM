<?php
require "classConnectionMySQL.php";
require "modelo_producto_in.php";
require "dao_producto.php";

$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];
$d = $_POST["n4"];
$e = $_POST["n5"];
$f = $_POST["n6"];
$g = $_POST["n7"];


$in= new Modelo_producto($a, $b, $c, $d, $e, $f, $g);

$insertar = new Dao_producto();

$insert = $insertar->Insertar($in);

    
?>
