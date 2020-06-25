<?php

require_once "classConnectionMySQL.php";
require_once "modelo_co.php";

class Dao_co
{              
    public $tipopago;


    public function Insertar(Modelo_co $cop_reg)
    { 
        session_start();
        $usuario = $_SESSION['username'];

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $consu = "SELECT * FROM fgs_tipo_de_pago WHERE nombre_tipo_pago='$cop_reg->tipopago'";
        $consu2 = "SELECT * FROM fgs_usuario WHERE numero_documento = $usuario";
        $consu3 = "SELECT * FROM fgs_carro_producto
        JOIN fgs_producto ON fgs_producto.id_producto = fgs_carro_producto.id_producto  
        WHERE id_carro_compras = $usuario";

        $b = mysqli_query($con1, $consu);
        $c = mysqli_fetch_assoc($b);

        $d = mysqli_query($con1, $consu2);
        $row = mysqli_fetch_assoc($d);

        $e = mysqli_query($con1, $consu3);

        $envio = 4500;
        $total = 0;
        while($row2 = mysqli_fetch_array($e))
        {
          $total = $total + $row2['precio']; 
        }

        $totaldef = $total + $envio;
        
        $td = $row['id_tipo_documento'];

        $x = $c["id_tipo_de_pago"];

        $date = date('Y/m/d H:i:00');


        $cadena= "INSERT INTO fgs_factura values (null, '$date', $usuario, $usuario, $td, $x, $totaldef)";

        if (mysqli_query($con1,$cadena))
        {
            echo 'insertado';
        }
        else
        {
           echo 'No se inserto el dato';
         }


        $select= "SELECT * FROM fgs_factura WHERE numero_documento=$usuario AND fecha_factura='$date'";

        $en = mysqli_query($con1, $select);
        if($en){
            echo "Si";
        }else{
            echo "no";
        }

        $row3 = mysqli_fetch_assoc($en);
        $idf = $row3['id_factura'];

        $date2 = date('Y/m/d');

        $es = "Espera";

        $insert= "INSERT INTO fgs_envio values (null, '$date2', $idf, '$es' )"; 

        if (mysqli_query($con1,$insert))
        {
            echo 'insertado';
        }
        else
        {
           echo 'No se inserto el dato';
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
