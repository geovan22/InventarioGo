<div class="row">
    <form  class="col s10" method="get" action="?Controller=Inventario&Method=IngresoCategoria">
      <div class="row">
      <h1>Crear Categoria</h1>

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
          <i class="material-icons prefix">local_library</i>
          <input name="categoria" placeholder="Categoria" id="categoria" type="text" class="validate" required="">
          <label for="categoria">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="Descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required=""">
          <label for="descr">Descripcion</label>
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