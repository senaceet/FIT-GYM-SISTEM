<?php
require "classConnectionMySQL.php";
require_once "modelo_co.php"; 
require_once "dao_co.php"; 

$a = $_POST["n1"];


$reg= new Modelo_co($a); 

$insertar = new Dao_co();

$insert = $insertar->Insertar($reg);

?>