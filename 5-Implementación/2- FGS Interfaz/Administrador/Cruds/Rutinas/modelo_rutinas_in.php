<?php 
    class Modelo_rutinas
    {
        public $idrutina;
        public $nrutina;
        public $rerutina;
        public $desrutina;
 
        public function Modelo_rutinas($idrutina, $nrutina, $rerutina, $desrutina)
        { 
           $this->idrutina = $idrutina;
           $this->nrutina = $nrutina;
           $this->rerutina = $rerutina;
           $this->desrutina = $desrutina;
        }
       

        public function setIdrutina($idrutina)
        { 
           $this->idrutina = $idrutina;
        }

        public function getIdrutina()
        {
           return $this->idrutina;
           
        }

        public function setNrutina($nrutina)
        { 
           $this->nrutina = $nrutina;
        }

        public function getNrutina()
        {
           return $this->nrutina;
           
        }

        public function setRerutina($rerutina)
        { 
           $this->rerutina = $rerutina;
        }

        public function getRerutina()
        {
           return $this->rerutina;
           
        }

        public function setDesrutina($desrutina)
        { 
           $this->desrutina = $desrutina;
        }

        public function getDesrutina()
        {
           return $this->desrutina;
           
        }
        
      }
?>