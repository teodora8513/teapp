<?php 
    //Create, read, update, delete
    class crud{
        private $db;
        //Konstruktor koji inicijalizuje privatnu varijablu na database konekciju
        function __construct($conn)
        {
            $this->db = $conn;

        }
        public function insert(){
            
        }
    }
?>