<?php 
    class Modelo_cc 
    {
        public $contraa;
        public $contran;
        public $contrav;

        public function Modelo_cc($contraa, $contran, $contrav)
        { 
           $this->contraa = $contraa;
           $this->contran = $contran;
           $this->contrav = $contrav;
        }
       
        public function getContraa()
        {
           return $this->contraa;
        }

        public function setContraa($contraa)
        { 
           $this->contraa = $contraa;
        }

        public function getContran()
        {
           return $this->contran;
        }

        public function setContran($contran)
        { 
           $this->contran = $contran;
        }

        public function getContrav()
        {
           return $this->contrav;
        }

        public function setContrav($contrav)
        { 
           $this->contrav = $contrav;
        }
       
      }
?>