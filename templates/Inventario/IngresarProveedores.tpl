<div class="row">
    <form  class="col s10" method="get" action="?Controller=Inventario&Method=IngresoCategoria">
      <div class="row">
      <h1>Ingresar Proveedores</h1>
       <div class="input-field col s7">
        <select class="browser-default">
            {foreach from=$m item=$marcas}
              <option value="{$marcas['idPRODUCTO']}">
                {$marcas['Nombre']}
              </option>
            {/foreach}
        </select>
         </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="marca" placeholder="Nombre Marca" id="marca" type="text" class="validate" required="">
          <label for="marca">Nombre</label>
        </div>
        <div class="input-field col s6 ">
          <i class="material-icons prefix">border_color</i>
          <input name="Descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required="">
          <label for="descr">Descripcion</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="Nit" placeholder="Nit" id="nit" type="text" class="validate" required="">
          <label for="nit">NIT</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="Correo" placeholder="Correo" id="correo" type="text" class="validate" required="">
          <label for="correo">Correo</label>
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