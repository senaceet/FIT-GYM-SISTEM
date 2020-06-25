<?php 
    class Modelo_envio_ed
    {
      public $idenvio;
        public $fenvio;
        public $estado;
 
        public function Modelo_envio_ed($idenvio, $fenvio, $estado)
        { 
         $this->idenvio = $idenvio;
           $this->fenvio = $fenvio;
           $this->estado = $estado;
        }

        public function setIdenvio($idenvio)
        { 
           $this->idenvio = $idenvio;
        }

        public function getIdenvio()
        {
           return $this->idenvio;
           
        }

        public function setFenvio($fenvio)
        { 
           $this->fenvio = $fenvio;
        }

        public function getFenvio()
        {
           return $this->fenvio;
           
        }

        public function setEstado($estado)
        { 
           $this->estado = $estado;
        }

        public function getEstado()
        {
           return $this->estado;
           
        }

      }
?>