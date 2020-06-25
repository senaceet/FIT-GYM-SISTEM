<?php

require_once "classConnectionMySQL.php";
require_once "modelo_dietas_in.php";

class Dao_dietas
{              
    public $iddieta;
    public $ndieta;
    public $tdieta;
    public $dudieta;
    public $desdieta;
    
    public function Insertar(Modelo_dietas $cop_in)
    { 
        $inser= "INSERT INTO fgs_dietas values ($cop_in->iddieta, '$cop_in->ndieta', '$cop_in->tdieta', '$cop_in->dudieta', '$cop_in->desdieta')";

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $a = mysqli_query($con1, $inser);   
        if($a)
        {
            header('Location: crud_dietas.php');
        }
        else
        {
            echo "No Inserto el dato";
        }
    }

    public function Consultar()
    { 

    }
     
    public function Modificar(Modelo_dietas $cop_mod)
    { 
        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $update = "UPDATE fgs_dietas SET nombre_dietas='$cop_mod->ndieta', tipo_dietas='$cop_mod->tdieta', duracion_dietas='$cop_mod->dudieta', descripcion_dietas='$cop_mod->desdieta' WHERE id_dietas=$cop_mod->iddieta";

        $a = mysqli_query($con1, $update);

            if($a)
            {
				header('Location: crud_dietas.php');
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