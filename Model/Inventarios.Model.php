<?php
       
        class Inventarios 
        {
            public $con;
            public function __construc(){

                $this->con=new Conexion();
            }


            public function IngresoMarca($marca, $descr)
            {
                $con=new Conexion();
                $q= "INSERT INTO `marca`(`Nombre`, `Descripcion`) VALUES ('$marca','$descr')";
               
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
    
            public function IngresoCategoria($value1,$value2,$value3)
            {
                $q= "INSERT INTO `categoria`( `PRODUCTO_idPRODUCTO`, `Nombre`, `Descripcion`)
                     VALUES ('$value1','$value2','$value3')";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
    
            public function IngresoProveedor()
            {
                $q= "INSERT INTO `proveedor`(`PRODUCTO_idPRODUCTO`, `Nombre`, `Descripcion`, `NIT`, `Correo`, `Telefono`)
                     VALUES ('value-1','value-2','value-3','value-4','value-5','value-6')";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
    
            public function IngresarProducto()
            {
                $q= "INSERT INTO `producto`(`Marca_idMarca`, `USUARIO_idUSUARIO`, `Nombre`, `Descripcion`, `Categoria`, `Precio`, `Proveedor`, `Stock`, `Marca`) 
                     VALUES ('value-1','value-2','value-3','value-4','value-5','value-6','value-7','value-8','value-9')";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
            public function BuscarProducto()
            {
                $q= "SELECT * FROM `producto` WHERE nombre= 'value-1'";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
            public function MostrarProducto()
            {
                $con=new Conexion();
                $q= "SELECT * FROM `producto`";
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
    
            public function BorrarProducto()
            {
                $q= "DELETE FROM `producto` WHERE nombre= 'value-1' ";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
        
            public function ActualizarProducto()
            {
                $q= "UPDATE `producto` SET `idPRODUCTO`='[value-1]',`Marca_idMarca`='[value-2]',`Nombre`='[value-3]',`Descripcion`='[value-4]',`Categoria`='[value-5]',`Precio`='[value-6]',`Proveedor`='[value-7]',`Stock`='[value-8]',`Marca`='[value-9]' WHERE idProducto ";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }

            public function MostrarMarca()
            {
                $con=new Conexion();
                $q= "SELECT * FROM `marca`";
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
        }

      
        
?>