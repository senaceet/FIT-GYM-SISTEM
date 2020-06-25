<?php
require "classConnectionMySQL.php";
require_once ("modelo_ti.php"); 
require_once ("dao_ti.php"); 

$a = $_POST["n1"];


$ti= new Modelo_ti($a); 

//echo "El dato enviado de Id es: " . $log->correo; 

$insertar = new Dao_ti();

$insert = $insertar->Insertar($ti);



?>
