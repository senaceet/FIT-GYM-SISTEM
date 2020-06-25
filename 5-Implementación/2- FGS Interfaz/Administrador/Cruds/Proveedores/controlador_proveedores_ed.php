<?php
require "classConnectionMySQL.php";
require "modelo_proveedores_ed.php";
require "dao_proveedores.php";

$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];
$d = $_POST["n4"];
$e = $_POST["n5"];
$f = $_POST["n6"];


$mod= new Modelo_Proveedores($a, $b, $c, $d, $e, $f);

$insertar = new Dao_Proveedores();

$insert = $insertar->Modificar($mod);

    
?>
