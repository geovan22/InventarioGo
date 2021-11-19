<h1>Mostar Producto</h1>
<table>
        <thead>
          <tr>
              <th>NOMBRE</th>
              <th>Descripcion</th>
              <th>PRECIO</th>
              <th>STOCK</th>
          </tr>
        </thead>

        <tbody>
            {foreach from=$p item=$productos}
            <tr>
            <td>{$productos['Nombre']}</td>
            <td>{$productos['Descricion']}</td>
           <td>{$productos['Precio']}</td>
           <td>{$productos['Stock']}</td>
          </tr>
            {/foreach}
  
        </tbody>
      </table>