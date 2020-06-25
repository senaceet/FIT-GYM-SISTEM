<?php

require_once "classConnectionMySQL.php";
require_once "modelo_proveedores_in.php";

class Dao_Proveedores
{              
    public $idpro;
    public $pnombre;
    public $snombre;
    public $papellido;
    public $sapellido;
    public $telpro;
    
    public function Insertar(Modelo_Proveedores $cop_in)
    { 
        $inser= "INSERT INTO fgs_proveedor values ($cop_in->idpro, '$cop_in->pnombre', '$cop_in->snombre', '$cop_in->papellido', '$cop_in->sapellido', $cop_in->telpro)";

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $a = mysqli_query($con1, $inser);   
        if($a)
        {
            header('Location: crud_proveedores.php');
        }
        else
        {
            echo "No Inserto el dato";
        }
    }

    public function Consultar()
    { 

    }
     
    public function Modificar(Modelo_Proveedores $cop_mod)
    { 
        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $update = "UPDATE fgs_proveedor SET primer_nombre_proveedor='$cop_mod->pnombre', segundo_nombre_proveedor='$cop_mod->snombre', primer_apellido_proveedor='$cop_mod->papellido', segundo_apellido_proveedor='$cop_mod->sapellido', numero_telefono_proveedor=$cop_mod->telpro WHERE id_proveedor=$cop_mod->idpro";

        $a = mysqli_query($con1, $update);

            if($a)
            {
				header('Location: crud_proveedores.php');
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