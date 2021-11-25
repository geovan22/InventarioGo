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
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
    
            public function IngresoProveedor($value1,$value2,$value3,$value4,$value5,$value6)
            {
                $con=new Conexion();
                $q= "INSERT INTO `proveedor`(`PRODUCTO_idPRODUCTO`, `Nombre`, `Descripcion`, `NIT`, `Correo`, `Telefono`)
                     VALUES ('$value1','$value2','$value3','$value4','$value5','$value6')";
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
    
            public function IngresarProducto($Marca_IdMarca,$USUARIO_idUSUARIO,$Nombre,$Desc,$Precio,$Stock)
            {
                $con=new Conexion();
                $q="INSERT INTO `producto`(`Marca_idMarca`, `USUARIO_idUSUARIO`, `Nombre`, `Descripcion`, `Precio`,`Stock`)
                 VALUES ('$Marca_IdMarca','$USUARIO_idUSUARIO','$Nombre','$Desc','$Precio','$Stock')";
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
            public function BuscarProducto($value1)
            {
                $con=new Conexion();
                $q= "SELECT * FROM `producto` WHERE nombre LIKE '%$value1%'";
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
         

            public function BuscarP($value1)
            {
                $con=new Conexion();
                $q= "SELECT * FROM `producto` WHERE idPRODUCTO ='$value1'";
                $resultado=$con->query($q);
                $con->close();
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
    
            public function BorrarProducto($value1)
            {
                $con=new Conexion();
                $q= "DELETE FROM `producto` WHERE nombre= '$value1' ";
                $resultado=$con->query($q);
                $con->close();
                return $resultado;
            }
        
            public function ActualizarProducto($id,$value5,$value6,$value7,$value8,$value9)
            {
                $con=new Conexion();
                $q= "UPDATE `producto` SET `Nombre`='$value5',`Descripcion`='$value6',`Precio`='$value7',`Stock`='$value8',`Marca_idMarca`='$value9' WHERE idProducto ='$id'";
                $resultado=$con->query($q);
                $con->close();
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