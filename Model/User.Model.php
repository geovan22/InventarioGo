<?php
	class User
    {
        public $con;
        public function __construct()
        {
            $this->con=new Conexion();
        }
        
        public function MostrarUsuario()
        {
            $q= "SELECT * FROM `usuario`";
            $resultado=$this->con->query($q);
            $this->con->close();
            return $resultado;
        }
    }
?>