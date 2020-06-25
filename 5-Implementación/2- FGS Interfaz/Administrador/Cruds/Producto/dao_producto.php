<?php

require_once "classConnectionMySQL.php";
require_once "modelo_producto_in.php";


class Dao_producto
{              
    public $idprod;
    public $nprod;
    public $iprod;
    public $fprod;
    public $pprod;
    public $mprod;
    public $proprod;
    
    public function Insertar(Modelo_producto $cop_in)
    { 
        $consu = "SELECT * FROM fgs_proveedor WHERE Primer_nombre_proveedor='$cop_in->proprod'";

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $b = mysqli_query($con1, $consu);
        $c = mysqli_fetch_assoc($b);

        $x = $c["id_proveedor"];

        $inser= "INSERT INTO fgs_producto values ($cop_in->idprod, '$cop_in->nprod', '$cop_in->iprod', '$cop_in->fprod', $cop_in->pprod, '$cop_in->mprod', $x)";


        $a = mysqli_query($con1, $inser);   
        if($a)
        {
            header('Location: crud_producto.php');
        }
        else
        {
            echo "No Inserto el dato";
        }
    }

    public function Consultar()
    { 

    }
     
    public function Modificar(Modelo_producto $cop_mod)
    { 
        $consu = "SELECT * FROM fgs_proveedor WHERE Primer_nombre_proveedor='$cop_mod->proprod'";

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $b = mysqli_query($con1, $consu);
        $c = mysqli_fetch_assoc($b);

        $x = $c["id_proveedor"];

        $update = "UPDATE fgs_producto SET nombre_producto='$cop_mod->nprod', imagen_producto='$cop_mod->iprod', fecha_vencimiento_producto='$cop_mod->fprod', precio=$cop_mod->pprod, marca='$cop_mod->mprod', id_proveedor=$x WHERE id_producto=$cop_mod->idprod";

        $a = mysqli_query($con1, $update);

            if($a)
            {
				header('Location: crud_producto.php');
            }else
            {
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
			}
    }
    
    public function Eliminar()
    { 

    }

    public function Listar()
    { 
         
    }
}
?>