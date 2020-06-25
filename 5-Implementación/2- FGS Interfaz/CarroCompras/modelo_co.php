<?php 
    class Modelo_co
    {
      public $tipopago;


         public function Modelo_co($tipopago)
        { 
            $this->tipopago = $tipopago;

            
        }
       
        public function getTipopago()
        {
           return $this->tipopago;
           
        }

        public function setTipopago($tipopago)
        { 
           $this->tipopago = $tipopago;
        }

        
   
      }
?>