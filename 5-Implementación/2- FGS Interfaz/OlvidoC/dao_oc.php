<?php

require_once "classConnectionMySQL.php";
require_once "modelo_oc.php";

class Dao_oc
{              

    public $correo;

    

    public function Insertar()
    { 
        
    }

    public function Consultar(Modelo_oc $cop_oc)
    { 
        
        $consul= "SELECT * FROM fgs_usuario WHERE correo_usuario='$cop_oc->correo'";

        $con4 = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con5 = $con4->Conectar();

        $b = mysqli_query($con5, $consul);  

        $c=0;
        $c = mysqli_num_rows($b);



    if($c)
    {
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "test@hostinger-tutorials.com";
        $to = "dacolorado5@misena.edu.co";
        $subject = "Checking PHP mail";
        $message = "PHP mail works just fine";
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        echo "The email message was sent.";

    }
    else
    {
        if($c >= 1)
        {
            header('Location: ../Administrador/Cruds/Dietas/crud_dietas.php');
        }
        else
        {
            echo "<script language='javascript'>alert('Usuario no Registrado');</script>
                <form action='login.php'>
                <button class='btn  my-2 my-sm-0 mr-2' type='submit' style='background-color:rgb(3, 156, 10) ; width: 8rem;'>
                Regresar
                </button>
                </form>";
        }
    }

        
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
