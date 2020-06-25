<?php
require "classConnectionMySQL.php";
require "modelo_rutinas_in.php";
require "dao_rutinas.php";

$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];
$d = $_POST["n4"];


$in= new Modelo_rutinas($a, $b, $c, $d);

$insertar = new Dao_rutinas();

$insert = $insertar->Insertar($in);

    
?>
