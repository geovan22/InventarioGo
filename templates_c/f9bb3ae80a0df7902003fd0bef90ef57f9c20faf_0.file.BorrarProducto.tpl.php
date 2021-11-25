<?php
/* Smarty version 3.1.40, created on 2021-11-25 01:56:12
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\BorrarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619edf2c5c5786_77054909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9bb3ae80a0df7902003fd0bef90ef57f9c20faf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\BorrarProducto.tpl',
      1 => 1637801766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619edf2c5c5786_77054909 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
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

   <?php if ((isset($_smarty_tpl->tpl_vars['lista_producto']->value))) {?>
    <table>
        <thead>
          <tr>
              <th>NOMBRE</th>
              <th>Borrar</th>
              
          </tr>
        </thead>

        <tbody>
        
        </tbody>
      </table>
    
   <?php }?>


  </div><?php }
}
