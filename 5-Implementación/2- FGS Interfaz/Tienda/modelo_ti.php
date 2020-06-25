<?php 
    class Modelo_ti 
    {
        public $idprod;

        public function Modelo_ti($idprod)
        { 
           $this->idprod = $idprod;
        }
       
        public function getIdprod()
        {
           return $this->idprod;
        }

        public function setIdprod($idprod)
        { 
           $this->idprod = $idprod;
        }
       
      }
?>