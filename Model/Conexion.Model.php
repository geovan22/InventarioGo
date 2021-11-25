<?php
	class Conexion extends mysqli 
    {
	   public function __construct()
       {
           /**
            $servidor="localhost";
            $password="";
            $usuario="root";
            $DB="inventario";
              Produccion */
            
          
             
            $servidor="mysql.webcindario.com";
            $password="Denver900";
            $usuario="lluvia";
            $DB="inventario";
          
            
            parent::__construct($servidor,$usuario,$password,$DB);
            
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('error en la conexion'):$error='Conectado a la base de datos';
            //echo $error;
       }
    }
?>