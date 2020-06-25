<?php 
    class Modelo_re 
    {
      public $numerodoc;
      public $pnombre;
      public $snombre;
      public $papellido;
      public $sapellido;
      public $correo;
      public $contra;
      public $fnacimiento;
      public $genero;
      public $peso;
      public $estatura;
      public $rh;
      public $tele;
      public $idrol;
      public $idtipodoc;

         public function Modelo_re($numerodoc, $pnombre, $snombre, $papellido, $sapellido, $correo, $contra, $fnacimiento, $genero, $peso, $estatura, $rh, $tele, $idrol, $idtipodoc)
        { 
            $this->numerodoc = $numerodoc;
            $this->pnombre = $pnombre;
            $this->snombre = $snombre;
            $this->papellido = $papellido;
            $this->sapellido = $sapellido;
            $this->correo = $correo;
            $this->contra = $contra;
            $this->fnacimiento = $fnacimiento;
            $this->genero = $genero;
            $this->peso = $peso;
            $this->estatura = $estatura;
            $this->rh = $rh;
            $this->tele = $tele;
            $this->idrol = $idrol;
            $this->idtipodoc = $idtipodoc;
            
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

        public function getContra()
        {
           return $this->contra;
        }

        public function setContra($contra)
        { 
           $this->contra = $contra;
        }
        
        public function getFnacimiento()
        {
           return $this->fnacimiento;
           
        }

        public function setFnacimiento($fnacimiento)
        { 
           $this->fnacimiento = $fnacimiento;
        }

        public function getGenero()
        {
           return $this->genero;
           
        }

        public function setGenero($genero)
        { 
           $this->genero = $genero;
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
        
        public function getTele()
        {
           return $this->tele;
           
        }

        public function setTele($tele)
        { 
           $this->tele = $tele;
        }

        public function getIdrol()
        {
           return $this->idrol;
           
        }

        public function setIdrol($idrol)
        { 
           $this->idrol = $idrol;
        }

        public function getIdtipodoc()
        {
           return $this->idtipodoc;
           
        }

        public function setIdtipodoc($idtipodoc)
        { 
           $this->idtipodoc = $idtipodoc;
        }
   
      }
?>