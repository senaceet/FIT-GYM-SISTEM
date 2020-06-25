<?php
require "classConnectionMySQL.php";
require_once ("modelo_cc.php"); 
require_once ("dao_cc.php"); 

$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];

$cc= new Modelo_cc($a, $b, $c); 


$insertar = new Dao_cc();

$insert = $insertar->Insertar($cc);



?>
