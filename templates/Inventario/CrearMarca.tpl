<div class="row">
    <form  class="col s10" method="get" action="?Controller=Inventario&Method=IngresoMarca">
      <div class="row">
       <h1>Ingreso Marca</h1>
       <div class="input-field col s6">
          <i class="material-icons prefix">local_library</i>
          <input name="marca" placeholder="Nombre Marca" id="marca" type="text" class="validate" required="">
          <label for="marca">Nombre</label>
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