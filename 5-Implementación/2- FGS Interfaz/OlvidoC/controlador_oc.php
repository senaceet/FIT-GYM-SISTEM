<?php
require "classConnectionMySQL.php";
require_once ("modelo_oc.php"); 
require_once ("dao_oc.php"); 

$a = $_POST["n1"];

$oc= new Modelo_oc($a); 

//echo "El dato enviado de Id es: " . $log->correo; 

$insertar = new Dao_oc();

$insert = $insertar->Consultar($oc);



?>
