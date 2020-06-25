<?php

require_once "classConnectionMySQL.php";
require_once "modelo_ed.php";


class Dao_ed
{              
    public $numerodoc;
    public $pnombre;
    public $snombre;
    public $papellido;
    public $sapellido;
    public $correo;
    public $idtipodoc;
    public $peso;
    public $estatura;
    public $rh;

    public function Insertar(Modelo_ed $cop_ed)
    { 
        session_start();
        $usuario = $_SESSION['username'];

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $consu2 = "SELECT * FROM fgs_tipo_documento WHERE nombre_documento='$cop_ed->idtipodoc'";
        $b2 = mysqli_query($con1, $consu2);
        $c2 = mysqli_fetch_assoc($b2);
        $y = $c2["id_tipo_documento"];

        $update = "UPDATE fgs_usuario SET numero_documento=$cop_ed->numerodoc, primer_nombre_usuario='$cop_ed->pnombre', segundo_nombre_usuario='$cop_ed->snombre', primer_apellido_usuario='$cop_ed->papellido', segundo_apellido_usuario='$cop_ed->sapellido', correo_usuario='$cop_ed->correo', id_tipo_documento=$y, peso_usuario='$cop_ed->peso', estatura_usuario='$cop_ed->estatura', tipo_sangre_usuario='$cop_ed->rh' WHERE numero_documento=$usuario";

        $a = mysqli_query($con1, $update);

            if($a)
            {
				header('Location: ../Usuario/Editar_perfil.php');
            }else
            {
				echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
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
