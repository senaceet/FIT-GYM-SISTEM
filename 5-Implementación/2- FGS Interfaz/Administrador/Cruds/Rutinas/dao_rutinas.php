<?php

require_once "classConnectionMySQL.php";
require_once "modelo_rutinas_in.php";

class Dao_rutinas
{              
    public $idrutina;
    public $nrutina;
    public $rerutina;
    public $desrutina;
    
    public function Insertar(Modelo_rutinas $cop_in)
    { 
        $inser= "INSERT INTO fgs_rutinas values ($cop_in->idrutina, '$cop_in->nrutina', '$cop_in->rerutina', '$cop_in->desrutina')";

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $a = mysqli_query($con1, $inser);   
        if($a)
        {
            header('Location: crud_rutinas.php');
        }
        else
        {
            echo "No Inserto el dato";
        }
    }

    public function Consultar()
    { 

    }
     
    public function Modificar(Modelo_rutinas $cop_mod)
    { 
        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $update = "UPDATE fgs_rutinas SET nombre_rutinas='$cop_mod->nrutina', repeticiones_rutinas='$cop_mod->rerutina', descripcion_rutinas='$cop_mod->desrutina' WHERE id_rutinas=$cop_mod->idrutina";

        $a = mysqli_query($con1, $update);

            if($a)
            {
				header('Location: crud_rutinas.php');
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