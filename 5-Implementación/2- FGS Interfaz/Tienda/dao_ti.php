<?php

require_once "classConnectionMySQL.php";
require_once "modelo_ti.php";


class Dao_ti
{              

    public $idprod;

    public function Insertar(Modelo_ti $cop_ti)
    { 
        session_start();
        $usuario = $_SESSION['username'];

        $inser= "INSERT INTO fgs_carro_compras values ($usuario, $usuario )";

        $con4 = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con5 = $con4->Conectar();

        $a = mysqli_query($con5, $inser);

        if($a){
            echo "dato insertado 11";
        }else {
            echo "no insertado 11";
        }

        $select= "SELECT * FROM fgs_producto WHERE id_producto = $cop_ti->idprod";  

        $b = mysqli_query($con5, $select);
        $row = mysqli_fetch_assoc($b);

        $c = $row['precio'];

        $inser2= "INSERT INTO fgs_carro_producto values (null, $usuario, $cop_ti->idprod, $usuario, $c)";

        $d = mysqli_query($con5, $inser2);

        if($d){
            header('Location: ../CarroCompras/CarroCompras.php');
        }else {
            echo "No conseguido";
        }
    }

    public function Consultar()
    { 
          
    }
     
    public function Modificar()
    { 
       
    }
    
    public function Eliminar()
    { 

    }

    public function Listar()
    { 
         
    }
}
?>
