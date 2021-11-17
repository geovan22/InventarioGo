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

       public function CrearMarca()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Crear Marca');
            $this->smarty->assign('Invent','CrearMarca');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       public function CrearCategoria()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Ingresar Categoria');
            $this->smarty->assign('Invent','CrearCategoria');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       public function IngresarProveedor()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Ingresar Proveedor');
            $this->smarty->assign('Invent','IngresarProveedor');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }

       public function BorrarProducto()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Borrar Producto');
            $this->smarty->assign('Invent','BorrarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       public function MostrarProducto()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Mostrar Producto');
            $this->smarty->assign('Invent','MostrarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       public function ActualizarProducto()
       {
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Actualizar Producto');
            $this->smarty->assign('Invent','ActualizarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       
    }
?>