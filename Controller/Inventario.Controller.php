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


    }

?>