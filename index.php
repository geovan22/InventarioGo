<?php

    include_once('Controller/Home.Controller.php');
    include_once('Controller/Usuario.Controller.php');
    /*
	include_once('Framework/Smarty/Smarty.class.php');
    $smarty=new Smarty();
    
    echo "en index";
    
    $arr=array("Hola", "Como", 99);
    
    
    $smarty->assign('datos',$arr);
    $smarty->assign('Nombre','Andrea');//$Nombre=Andrea
    $smarty->assign('Nombre1','Juan');//$Nombre=Andrea
    $smarty->display('Home.tpl');
    */
    
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
    
    //echo $Controller."--".$Method;
    
    $c=new $Controller();
    $c->$Method();
?>