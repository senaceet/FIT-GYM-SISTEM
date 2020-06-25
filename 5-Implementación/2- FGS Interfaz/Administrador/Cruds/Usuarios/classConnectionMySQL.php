<?php 
    class ConnectionMySQL  
    {
        public $host;
        public $user;
        public $password;
        public $database;
        public $conn;
 
        public function ConnectionMySQL()
        { 
           // $host= "localhost";
           // $user= "root";
           // $password= "";
           // $database= "Fit_Gym_System";
        }
  
        public function Conectar()
           {
            $host= "sql206.tonohost.com";   
            $user= "ottos_26088620";
            $password= "Dragonball5";
            $database= "ottos_26088620_fgd";    
            $conn = mysqli_connect($host, $user, $password, $database);
            return $conn;
           }
    }
?>