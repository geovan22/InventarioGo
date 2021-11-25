<div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=BorrarProducto">
      <div class="row">
      <h1>Borrar Producto</h1>
    
        <div class="input-field col s7">
          <i class="material-icons prefix">account_circle</i>
          <input name="producto" placeholder="Nombre" id="prod" type="text" class="validate" required="">
          <label for="prod">Nombre Producto</label>
        </div>

     <div class="input-field col s4">
         <input  class="waves-effect waves-light btn" type="submit" value="Buscar" />
        </div>


    </form>

   {if isset($lista_producto)}
    <table>
        <thead>
          <tr>
              <th>NOMBRE</th>
              <th>Borrar</th>
              
          </tr>
        </thead>

        <tbody>
            {foreach from=$lista_producto item=$productos}
            <tr>
            <td>{$productos['Nombre']}</td>
            <td> <a href="?Controller=Inventario&Method=BorrarProducto&idPRODUCTO={$productos['idPRODUCTO']} ">Borrar</a> </td>
         </tr>
            {/foreach}
  
        </tbody>
      </table>
    
   {/if}


  </div>