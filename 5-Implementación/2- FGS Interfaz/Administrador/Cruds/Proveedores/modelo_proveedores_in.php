<?php 
    class Modelo_Proveedores
    {
        public $idpro;
        public $pnombre;
        public $snombre;
        public $papellido;
        public $sapellido;
        public $telpro;
 
        public function Modelo_Proveedores($idpro, $pnombre, $snombre, $papellido, $sapellido, $telpro)
        { 
           $this->idpro = $idpro;
           $this->pnombre = $pnombre;
           $this->snombre = $snombre;
           $this->papellido = $papellido;
           $this->sapellido = $sapellido;
           $this->telpro = $telpro;
        }
       

        public function setIdpro($idpro)
        { 
           $this->idpro = $idpro;
        }

        public function getIdpro()
        {
           return $this->idpro;
           
        }

        public function setPnombre($pnombre)
        { 
           $this->pnombre = $pnombre;
        }

        public function getPnombre()
        {
           return $this->pnombre;
           
        }

        public function setSnombre($snombre)
        { 
           $this->snombre = $snombre;
        }

        public function getSnombre()
        {
           return $this->snombre;
           
        }

        public function setPapellido($papellido)
        { 
           $this->papellido = $papellido;
        }

        public function getPapellido()
        {
           return $this->papellido;
           
        }

        public function setSapellido($sapellido)
        { 
           $this->sapellido = $sapellido;
        }

        public function getSapellido()
        {
           return $this->sapellido;
           
        }

        public function setTelpro($telpro)
        { 
           $this->telpro = $telpro;
        }

        public function getTelpro()
        {
           return $this->telpro;
           
        }
        
      }
?>