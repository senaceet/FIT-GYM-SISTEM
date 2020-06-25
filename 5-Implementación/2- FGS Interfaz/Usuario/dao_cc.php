<?php

require_once "classConnectionMySQL.php";
require_once "modelo_cc.php";


class Dao_cc
{              
    public $contraa;
    public $contran;
    public $contrav;

    public function Insertar(Modelo_cc $cop_cc)
    { 
        session_start();
        $usuario = $_SESSION['username'];

        $con = new ConnectionMySQL();                                                                                                                                                                                                                                      
        $con1 = $con->Conectar();

        

        $select= "SELECT * FROM fgs_usuario WHERE numero_documento=$usuario";
        $a = mysqli_query($con1, $select);

        $row = mysqli_fetch_assoc($a);

        $cambio = MD5($cop_cc->contraa);

        $cambion = MD5($cop_cc->contran);

        if($cambio==$row['contra']){
            if($cop_cc->contran==$cop_cc->contrav){
                
                $update = "UPDATE fgs_usuario SET contra='$cambion' WHERE numero_documento=$usuario";
                $b = mysqli_query($con1, $update);

                if($b){
                    header('Location: Editar_perfil.php');
                }else{
                    echo "no se cambio contraseña";
                }

            }else{
                echo "La contraseña nueva no es igual a la contraseña de verificacion";
            }
        }else{
            echo "La contraseña antigua no coincide con tu contraseña";
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
