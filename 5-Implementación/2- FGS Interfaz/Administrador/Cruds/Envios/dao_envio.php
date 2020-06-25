<?php

require_once "classConnectionMySQL.php";
require_once "modelo_envio_ed.php";


class Dao_envio
{       
    public $idenvio;       
    public $fenvio;
    public $estado;
    
    public function Insertar()
    { 

    }

    public function Consultar()
    { 

    }
     
    public function Modificar(Modelo_envio_ed $cop_mod)
    { 
        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $update = "UPDATE fgs_envio SET fecha_envio='$cop_mod->fenvio', Estado='$cop_mod->estado' WHERE id_envio=$cop_mod->idenvio";

        $a = mysqli_query($con1, $update);

            if($a)
            {
				header('Location: crud_envio.php');
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