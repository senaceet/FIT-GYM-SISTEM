<?php
require "classConnectionMySQL.php";
require_once "modelo_ed.php"; 
require_once "dao_ed.php"; 

$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];
$d = $_POST["n4"];
$e = $_POST["n5"];
$f = $_POST["n6"];
$g = $_POST["n7"];
$h = $_POST["n8"];
$i = $_POST["n9"];
$j = $_POST["n10"];


$reg= new Modelo_ed($a, $b, $c, $d, $e, $f, $g, $h, $i, $j); 

$insertar = new Dao_ed();

$insert = $insertar->Insertar($reg);


?>
