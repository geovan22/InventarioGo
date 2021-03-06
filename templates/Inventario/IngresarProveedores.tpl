<div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=IngresoProveedor">
      <div class="row">
      <h1>Ingresar Proveedores</h1>
       <div class="input-field col s7">
        <select name="nombre"class="browser-default">
            {foreach from=$p item=$producto}
              <option value="{$producto['idPRODUCTO']}">
                {$producto['Nombre']}
              </option>
            {/foreach}
        </select>
         </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="provee" placeholder="Nombre Proveedor" id="provee" type="text" class="validate" required="">
          <label for="provee">Nombre</label>
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
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="tele" placeholder="telefono" id="tele" type="text" class="validate" required="">
          <label for="tele">telefono</label>
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