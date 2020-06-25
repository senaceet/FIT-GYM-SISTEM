<?php 
    class Modelo_ed 
    {
      public $numerodoc;
      public $pnombre;
      public $snombre;
      public $papellido;
      public $sapellido;
      public $correo;
      public $idtipodoc;
      public $peso;
      public $estatura;
      public $rh;
      

         public function Modelo_ed($numerodoc, $pnombre, $snombre, $papellido, $sapellido, $correo, $idtipodoc, $peso, $estatura, $rh )
        { 
            $this->numerodoc = $numerodoc;
            $this->pnombre = $pnombre;
            $this->snombre = $snombre;
            $this->papellido = $papellido;
            $this->sapellido = $sapellido;
            $this->correo = $correo;
            $this->idtipodoc = $idtipodoc;
            $this->peso = $peso;
            $this->estatura = $estatura;
            $this->rh = $rh;
            
            
        }
       
        public function getPnombre()
        {
           return $this->pnombre;
           
        }

        public function setPnombre($pnombre)
        { 
           $this->pnombre = $pnombre;
        }

        public function getSnombre()
        {
           return $this->snombre;
           
        }

        public function setSnombre($snombre)
        { 
           $this->snombre = $snombre;
        }

        public function getPapellido()
        {
           return $this->papellido;
           
        }

        public function setPapellido($papellido)
        { 
           $this->papellido = $papellido;
        }

        public function getSapellido()
        {
           return $this->sapellido;
           
        }

        public function setSapellido($sapellido)
        { 
           $this->sapellido = $sapellido;
        }

      
        public function getCorreo()
        {
           return $this->correo;
           
        }

        public function setCorreo($correo)
        { 
           $this->correo = $correo;
        }

        public function getIdtipodoc()
        {
           return $this->idtipodoc;
           
        }

        public function setIdtipodoc($idtipodoc)
        { 
           $this->idtipodoc = $idtipodoc;
        }

        public function getPeso()
        {
           return $this->peso;
           
        }

        public function setPeso($peso)
        { 
           $this->peso = $peso;
        }

        public function getEstatura()
        {
           return $this->estatura;
           
        }

        public function setEstatura($estatura)
        { 
           $this->estatura = $estatura;
        }

        public function getRh()
        {
           return $this->rh;
           
        }

        public function setRh($rh)
        { 
           $this->rh = $rh;
        }
        
        
   
      }
?>