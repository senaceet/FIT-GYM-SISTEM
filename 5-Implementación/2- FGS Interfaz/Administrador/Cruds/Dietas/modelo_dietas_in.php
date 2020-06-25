<?php 
    class Modelo_dietas
    {
        public $iddieta;
        public $ndieta;
        public $tdieta;
        public $dudieta;
        public $desdieta;
 
        public function Modelo_dietas($iddieta, $ndieta, $tdieta, $dudieta, $desdieta)
        { 
           $this->iddieta = $iddieta;
           $this->ndieta = $ndieta;
           $this->tdieta = $tdieta;
           $this->dudieta = $dudieta;
           $this->desdieta = $desdieta;
        }
       

        public function setIddieta($iddieta)
        { 
           $this->iddieta = $iddieta;
        }

        public function getIddieta()
        {
           return $this->iddieta;
           
        }

        public function setNdieta($ndieta)
        { 
           $this->ndieta = $ndieta;
        }

        public function getNdieta()
        {
           return $this->ndieta;
           
        }

        public function setTdieta($tdieta)
        { 
           $this->tdieta = $tdieta;
        }

        public function getTdieta()
        {
           return $this->tdieta;
           
        }

        public function setDudieta($dudieta)
        { 
           $this->dudieta = $dudieta;
        }

        public function getDudieta()
        {
           return $this->dudieta;
           
        }

        public function setDesdieta($desdieta)
        { 
           $this->desdieta = $desdieta;
        }

        public function getDesdieta()
        {
           return $this->desdieta;
           
        }
        
      }
?>