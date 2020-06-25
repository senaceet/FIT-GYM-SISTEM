<?php 
    class Modelo_log 
    {
        public $correo;
        public $contra;
       

        public function Modelo_log($correo, $contra)
        { 
           $this->correo = $correo;
           $this->contra = $contra;
           
        }
       
        public function getCorreo()
        {
           return $this->correo;
           
        }

        public function setCorreo($correo)
        { 
           $this->correo = $correo;
        }

        public function getContra()
        {
           return $this->contra;
           
        }

        public function setContra($contra)
        { 
           $this->contra = $contra;
        }
        
       
      }
?>