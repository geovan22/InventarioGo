<?php

    class Inventario
    {
        public $smarty;
        public $invetario;
        
        public function __construct()
        {
        $this->smarty=new Smarty();
        $this->inventario=new Inventario();
        }
        public function IngresoMarca()
            {
                $m=$_GET['marca'];
                $d=$_GET['descr'];
                $u=$this->inventario->IngresoMarca($m,$d);
            }


    }

?>