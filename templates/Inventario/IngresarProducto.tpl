<div class="row">
    <form  class="col s10" method="get" action="?Controller=Inventario&Method=IngresoCategoria">
      <div class="row">
      <h1>Ingreso Producto</h1>
    
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="producto" placeholder="Nombre Producto" id="prod" type="text" class="validate" required="">
          <label for="prod">Nombre Producto</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="Descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required="">
          <label for="descr">Descripcion</label>
        </div>
         <div class="input-field col s7">
        <select class="Seleccionar Categoria">
            <option value="" disabled selected>Selecionar Categoria</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
         </div>
        <div class="input-field col s7">
        <select class="Seleccionar Marca">
            <option value="" disabled selected>Selecionar Marca</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
         </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="precio" placeholder="Precio" id="precio" type="int" class="validate" required="">
          <label for="precio">Precio</label>
        </div>
         <div class="input-field col s7">
        <select class="Seleccionar Proveedor">
            <option value="" disabled selected>Selecionar Proveedor</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
         </div>
          <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="stock" placeholder="Stock" id="stock" type="int" class="validate" required="">
          <label for="stock">Stock</label>
        </div>
        
      </div>
     <div class="input-field col s8">
         <input  class="waves-effect waves-light btn" type="submit" value="Ingresar" />
        </div>
    </form>
  </div>
