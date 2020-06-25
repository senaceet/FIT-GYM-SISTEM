<?php 
    class Modelo_producto
    {
        public $idprod;
        public $nprod;
        public $iprod;
        public $fprod;
        public $pprod;
        public $mprod;
        public $proprod;
 
        public function Modelo_producto($idprod, $nprod, $iprod, $fprod, $pprod, $mprod, $proprod)
        { 
           $this->idprod = $idprod;
           $this->nprod = $nprod;
           $this->iprod = $iprod;
           $this->fprod = $fprod;
           $this->pprod = $pprod;
           $this->mprod = $mprod;
           $this->proprod = $proprod;
        }
       

        public function setIdprod($idprod)
        { 
           $this->idprod = $idprod;
        }

        public function getIdprod()
        {
           return $this->idprod;
           
        }

        public function setNprod($nprod)
        { 
           $this->nprod = $nprod;
        }

        public function getNprod()
        {
           return $this->nprod;
           
        }

        public function setIprod($iprod)
        { 
           $this->iprod = $iprod;
        }

        public function getIprod()
        {
           return $this->iprod;
           
        }

        public function setFprod($fprod)
        { 
           $this->fprod = $fprod;
        }

        public function getFprod()
        {
           return $this->fprod;
           
        }

        public function setPprod($pprod)
        { 
           $this->pprod = $pprod;
        }

        public function getPprod()
        {
           return $this->pprod;
           
        }

        public function setMprod($mprod)
        { 
           $this->mprod = $mprod;
        }

        public function getMprod()
        {
           return $this->mprod;
           
        }

        public function setProprod($proprod)
        { 
           $this->proprod = $proprod;
        }

        public function getProprod()
        {
           return $this->proprod;
           
        }
        
      }
?>