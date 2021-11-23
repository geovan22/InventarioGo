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
                $m=$_POST['marca'];
                $d=$_POST['descr'];
                $p=$_POST['producto'];
                $u=$this->inventarios->IngresoCategoria($m,$d,$p);
                $this->vista->CrearCategoria();
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