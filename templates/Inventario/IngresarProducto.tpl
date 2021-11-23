<div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=IngresoProducto">
      <div class="row">
      <h1>Ingreso Producto</h1>
    
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="producto" placeholder="Nombre" id="prod" type="text" class="validate" required="">
          <label for="prod">Nombre Producto</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">assignment</i>
          <input name="Descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required="">
          <label for="descr">Descripcion</label>
        </div>


        <div class="input-field col s6">
          <i class="material-icons prefix">attach_money</i>
          <input name="precio" placeholder="Precio" id="precio" type="number" class="validate" required="">
          <label for="precio">Precio</label>
        </div>

        
             <div class="input-field col s6">
          <i class="material-icons prefix">add_shopping_cart</i>
          <input name="stock" placeholder="Stock" id="stock" type="number" class="validate" required="">
          <label for="stock">Stock</label>
        </div>

          <div class="input-field col s7">
        <select class="browser-default">
            {foreach from=$m item=$marcas}
              <option value="{$marcas['idMarca']}">
                {$marcas['Nombre']}
              </option>
            {/foreach}
        </select>
         </div>
        
      </div>
     <div class="input-field col s8">
         <input  class="waves-effect waves-light btn" type="submit" value="Ingresar" />
        </div>
    </form>
  </div>

<script type="text/javascript">
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
</script>