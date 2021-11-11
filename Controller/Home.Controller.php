<?php
    class Home
    {
        public $smarty;
        
        public function __construct()
        {
           $this->smarty=new Smarty();
        }
        
        public function Index()
        {
           $this->smarty->display('Home.tpl');
        }
        
        public function Error()
        {
           $this->smarty->display('Error.tpl');
        }
    }
?>