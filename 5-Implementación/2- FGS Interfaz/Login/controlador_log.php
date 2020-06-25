<?php
require "classConnectionMySQL.php";
require_once ("modelo_log.php"); 
require_once ("dao_log.php"); 

$a = $_POST["n1"];
$b = $_POST["n2"];


$log= new Modelo_log($a, $b); 

//echo "El dato enviado de Id es: " . $log->correo; 

$insertar = new Dao_log();

$insert = $insertar->Consultar($log);



?>
