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
                $con=new Conexion();
                $q= "INSERT INTO `categoria`( `PRODUCTO_idPRODUCTO`, `Nombre`, `Descripcion`)
                     VALUES ('$value1','$value2','$value3')";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
    
            public function IngresoProveedor($value1,$value2,$value3,$value4,$value5,$value6)
            {
                $con=new Conexion();
                $q= "INSERT INTO `proveedor`(`PRODUCTO_idPRODUCTO`, `Nombre`, `Descripcion`, `NIT`, `Correo`, `Telefono`)
                     VALUES ('$value1','$value2','$value3','$value4','$value5','$value6')";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
    
            public function IngresarProducto($value1,$value2,$value3,$value4,$value5)
            {
                $con=new Conexion();
                $q= "INSERT INTO `producto`( `Nombre`, `Descripcion`,`Precio`, `Stock`, `Marca`) 
                     VALUES ('$value1','$value2','$value3','$value4','$value5')";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
            public function BuscarProducto()
            {
                $con=new Conexion();
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
                $con=new Conexion();
                $q= "DELETE FROM `producto` WHERE nombre= 'value-1' ";
                $resultado=$this->con->query($q);
                $this->con->close();
                return $resultado;
            }
        
            public function ActualizarProducto()
            {
                $con=new Conexion();
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