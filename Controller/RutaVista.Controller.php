<?php
	class RutaVista 
    {
       public $smarty;  
       public $inventario;
	   public function __construct()
       {
           session_start();
            $this->smarty = new  Smarty();
            $this->inventario= new Inventarios();
       }
       
       public function BuscarProducto()
       {    $this->smarty->assign('lista_producto',$_SESSION['lista_producto']);
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Buscar Producto');
            $this->smarty->assign('Invent','BuscarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       
       public function IngresarProducto()
       {
            $m= $this->inventario->MostrarMarca();
            $ma=array();
            while($marcas=mysqli_fetch_assoc($m))
            {
               array_push($ma,$marcas);
            }
            $this->smarty->assign('m',$ma);
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
          $p= $this->inventario->MostrarProducto();
          $po=array();
          while($productos=mysqli_fetch_assoc($p))
          {
             array_push($po,$productos);
          }
          $this->smarty->assign('p',$po);
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Ingresar Categoria');
            $this->smarty->assign('Invent','IngresarCategoria');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       public function IngresarProveedor()
       {
          $p= $this->inventario->MostrarProducto();
          $po=array();
          while($productos=mysqli_fetch_assoc($p))
          {
             array_push($po,$productos);
          }
          $this->smarty->assign('p',$po);
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Ingresar Proveedor');
            $this->smarty->assign('Invent','IngresarProveedores');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }

 
       public function MostrarProducto()
       {
          $p= $this->inventario->MostrarProducto();
          $po=array();
          while($productos=mysqli_fetch_assoc($p))
          {
             array_push($po,$productos);
          }
          $this->smarty->assign('p',$po);
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Mostrar Producto');
            $this->smarty->assign('Invent','MostrarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }
       public function ActualizarProducto()
       {
          $m= $this->inventario->MostrarMarca();
          $ma=array();
          while($marcas=mysqli_fetch_assoc($m))
          {
             array_push($ma,$marcas);
          }
          $this->smarty->assign('id',$_SESSION['idP']);
          $this->smarty->assign('m',$ma);
            $this->smarty->assign('NombreP',$_SESSION['NombreP']);
            $this->smarty->assign('DescripcionP',$_SESSION['DescripcionP']);
            $this->smarty->assign('PrecioP',$_SESSION['PrecioP']);
            $this->smarty->assign('StockP',$_SESSION['StockP']);
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Actualizar Producto');
            $this->smarty->assign('Invent','ActualizarProducto');
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

       public function BorrarP()
       {
            $this->smarty->assign('lista_producto',$_SESSION['lista_producto']);
            $this->smarty->assign('Nombre',$_SESSION['nombre']);
            $this->smarty->assign('title','Borrar Producto');
            $this->smarty->assign('Invent','BorrarProducto');
            $this->smarty->assign('Carpeta','Inventario');
            $this->smarty->assign('Vista','Inventario');
            $this->smarty->display('Index.tpl');
       }

       
    }
?>