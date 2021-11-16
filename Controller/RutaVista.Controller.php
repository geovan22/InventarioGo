<?php
	class RutaVista 
    {
       public $smarty;  
	   public function __construct()
       {
            session_start();
            $this->smarty = new  Smarty();
       }
       
       public function BuscarProducto()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Buscar Producto');
            $this->smarty->assign('Invent','BuscarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       
       public function IngresarProducto()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Ingresar Producto');
            $this->smarty->assign('Invent','IngresarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
    }
?>