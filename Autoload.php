<?php
    function Carga($class)
    {
        if (is_file('Controller/'.$class.'.Controller.php')) 
        {
            include_once('Controller/'.$class.'.Controller.php');
        }
        
        if (is_file('Model/'.$class.'.Model.php')) 
        {
            include_once('Model/'.$class.'.Model.php');
        }
        
        if (is_file('Framework/Smarty/'.$class.'.class.php')) 
        {
            include_once('Framework/Smarty/'.$class.'.class.php');
        }
    }
    
    spl_autoload_register('Carga');
?>