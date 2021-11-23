<div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=IngresoProducto">
      <div class="row">
      <h1>Buscar Producto</h1>
    
        <div class="input-field col s7">
          <i class="material-icons prefix">account_circle</i>
          <input name="producto" placeholder="Nombre" id="prod" type="text" class="validate" required="">
          <label for="prod">Nombre Producto</label>
        </div>

     <div class="input-field col s4">
         <input  class="waves-effect waves-light btn" type="submit" value="Buscar" />
        </div>
        <div class="input-field col s4">
         <input  href="?Controller=RutaVista&Method=ActualizarProducto" class="waves-effect waves-light btn" type="submit" value="Actualizar" />
      
        
        </div>
        
    </form>
  </div>