<?php
	class Usuario
    {
        public $smarty;
        
        public function __construct()
        {
           $this->smarty=new Smarty();
        }
        
        public function Login()
        {
           echo "en login";
        }
    }
?>