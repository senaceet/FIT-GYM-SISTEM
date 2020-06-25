<?php
require "classConnectionMySQL.php";
require_once "modelo_re.php"; 
require_once "dao_re.php"; 

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
$k = $_POST["n11"];
$l = $_POST["n12"];
$m = $_POST["n13"];
$n = $_POST["n14"];
$o = $_POST["n15"]; 

$reg= new Modelo_re($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k, $l, $m, $n, $o); 

$insertar = new Dao_re();

$insert = $insertar->Insertar($reg);



?>