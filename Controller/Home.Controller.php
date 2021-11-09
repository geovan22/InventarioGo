<?php
    include_once('Framework/Smarty/Smarty.class.php');

    class Home
    {
	   public function Index()
       {
	       $smarty=new Smarty();
           $smarty->display('Home.tpl');
       }
       
       public function Error()
       {
	       $smarty=new Smarty();
           $smarty->display('Error.tpl');
       }
    }
?>