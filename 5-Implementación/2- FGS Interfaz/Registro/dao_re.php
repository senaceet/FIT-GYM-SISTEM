<?php

require_once "classConnectionMySQL.php";
require_once "modelo_re.php";

class Dao_re
{              
    public $numerodoc;
    public $pnombre;
    public $snombre;
    public $papellido;
    public $sapellido;
    public $correo;
    public $contra;
    public $fnacimiento;
    public $genero;
    public $peso;
    public $estatura;
    public $rh;
    public $tele;
    public $idrol;
    public $idtipodoc;

    
    public function Insertar(Modelo_re $cop_reg)
    { 
        $cambio = MD5($cop_reg->contra);

        $consu = "SELECT * FROM fgs_rol WHERE nombre_rol='$cop_reg->idrol'";
        $consu2 = "SELECT * FROM fgs_tipo_documento WHERE nombre_documento='$cop_reg->idtipodoc'";

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        $b = mysqli_query($con1, $consu);
        $c = mysqli_fetch_assoc($b);

        $b2 = mysqli_query($con1, $consu2);
        $c2 = mysqli_fetch_assoc($b2);

        $x = $c["id_rol"];
        $y = $c2["id_tipo_documento"];

        $cadena= "INSERT INTO fgs_usuario values ($cop_reg->numerodoc, '$cop_reg->pnombre', '$cop_reg->snombre', '$cop_reg->papellido', '$cop_reg->sapellido', '$cop_reg->correo', '$cambio', '$cop_reg->fnacimiento', '$cop_reg->genero', $cop_reg->peso, $cop_reg->estatura, '$cop_reg->rh', $cop_reg->tele, $x, $y)";

        if (mysqli_query($con1,$cadena))
        {
            header('Location: ../Login/login.php');
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
