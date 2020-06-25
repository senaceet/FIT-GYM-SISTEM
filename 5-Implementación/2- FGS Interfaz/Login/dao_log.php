<?php

require_once "classConnectionMySQL.php";
require_once "modelo_log.php";

class Dao_log
{              

    public $correo;
    public $contra;

    

    public function Insertar()
    { 
        
    }

    public function Consultar(Modelo_log $cop_log)
    { 
        session_start();

        $cambio = MD5($cop_log->contra);

        $consul= "SELECT * FROM fgs_usuario WHERE correo_usuario='$cop_log->correo' AND  contra='$cambio'";

        $consul2= "SELECT * FROM fgs_usuario WHERE correo_usuario='$cop_log->correo' AND  contra='$cambio'";

        $con4 = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con5 = $con4->Conectar();

        $a = mysqli_query($con5, $consul2);
        $b = mysqli_query($con5, $consul);  

        $row = mysqli_fetch_assoc($a);

        $c=0;
        $c = mysqli_num_rows($b);

    if($row['id_rol']==2)
    {
        if($c >= 1)
        {
            $_SESSION['username'] = $row['numero_documento'];
            header('Location: ../Usuario/zonas.php');
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
    else if($row['id_rol']==3)
    {
        if($c >= 1)
        {
            header('Location: ../usuario/zonas.html');
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
