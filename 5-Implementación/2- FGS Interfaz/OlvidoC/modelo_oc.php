<?php 
    class Modelo_oc 
    {
        public $correo;
       

        public function Modelo_oc($correo)
        { 
           $this->correo = $correo;
           
        }
       
        public function getCorreo()
        {
           return $this->correo;
           
        }

        public function setCorreo($correo)
        { 
           $this->correo = $correo;
        }

        
      }
?>