<?php
require "classConnectionMySQL.php";
require "modelo_dietas_in.php";
require "dao_dietas.php";

$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];
$d = $_POST["n4"];
$e = $_POST["n5"];


$mod= new Modelo_dietas( $a, $b, $c, $d, $e);

$insertar = new Dao_dietas();

$insert = $insertar->Modificar($mod);

    
?>
