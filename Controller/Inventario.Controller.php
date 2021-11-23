<?php

    class Inventario
    {
        public $smarty;
        public $invetarios;
        public $vista;
        public function __construct()
        {
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
                $m=$_POST['categoria'];
                $d=$_POST['descr'];
                $p=$_POST['producto'];
                $u=$this->inventarios->IngresoCategoria($m,$d,$p);
                $this->vista->IngresarCategoria();
            }

            public function IngresoProveedor()
            {
                $p=$_POST['producto'];
                 $pr=$_POST['provee'];
                $d=$_POST['descr'];
                $n=$_POST['nit'];
                $c=$_POST['correo'];
               
                $u=$this->inventarios->IngresoProveedor($p,$pe,$d,$n,$c);
                $this->vista->IngresarProveedores();
            }
        public function IngresoProducto()
            {
                $n=$_POST['prod'];
                $d=$_POST['descr'];
                $p=$_POST['precio'];
                $s=$_POST['stock'];
                $m=$_POST['marca'];
                $u=$this->inventarios->IngresarProducto($n,$d,$p,$s,$m);
                $this->vista->IngresarProducto();
            }

    }

?>