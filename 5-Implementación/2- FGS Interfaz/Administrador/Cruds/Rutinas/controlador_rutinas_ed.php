<?php
require "classConnectionMySQL.php";
require "modelo_rutinas_ed.php";
require "dao_rutinas.php";

$a = $_POST["n1"];
$b = $_POST["n2"];
$c = $_POST["n3"];
$d = $_POST["n4"];


$mod= new Modelo_rutinas($a, $b, $c, $d);

$insertar = new Dao_rutinas();

$insert = $insertar->Modificar($mod);

    
?>
