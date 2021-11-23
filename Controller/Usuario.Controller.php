<?php
	class Usuario
    {
        public $smarty;
        public $user;
        
        public function __construct()
        {
           $this->smarty=new Smarty();
           $this->user=new User();
        }
        
        public function Login()
        {
            $u=$_POST['user'];
            $p=$_POST['pass'];
            $u=$this->user->BuscarUsuario($u,$p);
         
            if($u->num_rows==0)
            {
                $this->smarty->assign('alerta','Usuario o password no existe');
                $this->smarty->assign('Carpeta','Home');
                $this->smarty->assign('Vista','Home');
                $this->smarty->display('Index.tpl');
            }
            else if($u->num_rows==1)
            {
                session_start();
                $fila=mysqli_fetch_array($u);
                $_SESSION['nombre']=$fila['Usuario'];
                $_SESSION['idNombre']=$fila['idUSUARIO'];
                $this->smarty->assign('Nombre',$_SESSION['nombre']);
                $this->smarty->assign('title','Inventario');
                $this->smarty->assign('Carpeta','Inventario');
                $this->smarty->assign('Vista','Inventario');
                $this->smarty->display('Index.tpl');
            }
            else
            {
                $this->smarty->assign('alerta','Consulte a su administrador');
                $this->smarty->assign('Carpeta','Home');
                $this->smarty->assign('Vista','Home');
                $this->smarty->display('Index.tpl');
            }
        }
    }
?>