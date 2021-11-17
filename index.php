<?php
    include_once('Autoload.php');
    
    if(isset($_GET['Controller'])&& isset($_GET['Method'])) 
    {
        $Controller=$_GET['Controller'];
        $Method=$_GET['Method'];
	} 
    else 
    {
        $Controller='Home';
        $Method='Index';
    }
    
    if(class_exists($Controller) && method_exists($Controller,$Method))
    {
        $c=new $Controller();//$c=new Home()
        $c->$Method();
    }
    else
    {
        echo "No existe clase o metodo";
  
    }


?>


