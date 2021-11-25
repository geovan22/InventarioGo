<?php

    class Inventario
    {
        public $smarty;
        public $invetarios;
        public $vista;
        
        public function __construct()
        {
            session_start();
        $this->smarty=new Smarty();
        $this->inventarios=new Inventarios();
        $this->vista=new RutaVista();
        }
        public function IngresoMarca()
            {
                $m=$_POST['marca'];
                $d=$_POST['descr'];
                $u=$this->inventarios->IngresoMarca($m,$d);
                $this->vista->CrearMarca();
            }
            public function IngresoCategoria()
            {
                
                $n=$_POST['categoria'];
                $d=$_POST['descripcion'];
                $p=$_POST['nombre'];
                $u=$this->inventarios->IngresoCategoria($p,$n,$d);
                $this->vista->CrearCategoria();
            }

            public function IngresoProveedor()
            {
                $p=$_POST['nombre'];
                $pr=$_POST['provee'];
                $d=$_POST['Descripcion'];
                $n=$_POST['Nit'];
                $c=$_POST['Correo'];
                $t=$_POST['tele'];
                $u=$this->inventarios->IngresoProveedor($p,$pr,$d,$n,$c,$t);
                $this->vista->IngresarProveedor();
            }
        public function IngresoProducto()
            {
                $n=$_POST['producto'];
                $d=$_POST['descripcion'];
                $p=$_POST['precio'];
                $s=$_POST['stock'];
                $m=$_POST['marca'];
                $u=$this->inventarios->IngresarProducto($m,$_SESSION['idNombre'],$n,$d,$p,$s);
                $this->vista->IngresarProducto();

                //VALUES ('$Marca_IdMarca','$USUARIO_idUSUARIO','$Nombre','$Desc','$Precio','$Stock')";
            }

            public function BuscarP()
            {
                $b=$_POST['producto'];
                $p=$this->inventarios->BuscarProducto($b);
                $po=array();
                while($productos=mysqli_fetch_assoc($p))
                {
                    array_push($po,$productos);
                }
                $_SESSION['lista_producto']=$po;
                $this->vista->BuscarProducto();
             }

             public function Actualizarp()
             {
                 $id=$_GET['idPRODUCTO'];
                 $producto=$this->inventarios->BuscarP($id);
                 $po=array();
                 while($productos=mysqli_fetch_assoc($producto))
                 {
                     array_push($po,$productos);
                 }
                 $_SESSION['idP']=$id;
                 $_SESSION['NombreP']=$po[0]['Nombre']; 
                 $_SESSION['DescripcionP']=$po[0]['Descripcion'];
                 $_SESSION['PrecioP']=$po[0]['Precio']; 
                 $_SESSION['StockP']=$po[0]['Stock'];
                 $_SESSION['MarcaP']=$po[0]['Marca'];
               
                 $this->vista->ActualizarProducto();
             }

             public function ActualizarProducto()
             {
                $id=$_POST['id'];
                $n=$_POST['producto'];
                $d=$_POST['Descripcion'];
                $p=$_POST['precio'];
                $s=$_POST['stock'];
                $m=$_POST['marca'];
                $u=$this->inventarios->ActualizarProducto($id,$n,$d,$p,$s,$m);
               
                $this->vista->BuscarProducto();

             }

             public function BorrarProducto()
             { 
                
                $b=$_POST['producto'];
                $p=$this->inventarios->BuscarProducto($b);
               
                $po=array();
                while($productos=mysqli_fetch_assoc($p))
                {
                    array_push($po,$productos);
                }
                var_dump($po);
                $_SESSION['lista_producto']=$po;
                 $this->vista->BorrarP();
                   
             }

    }

?>