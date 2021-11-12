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
            $this->smarty->assign('Carpeta','Home');
            $this->smarty->assign('Vista','Home');
           $this->smarty->display('Index.tpl');
        }
        
        public function Error()
        {
            $this->smarty->assign('Carpeta','Home');
            $this->smarty->assign('Vista','Error');
           $this->smarty->display('Index.tpl');
        }
    }
?>