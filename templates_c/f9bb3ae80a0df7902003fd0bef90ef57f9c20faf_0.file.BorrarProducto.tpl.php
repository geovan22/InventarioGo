<?php
/* Smarty version 3.1.40, created on 2021-11-25 03:36:57
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\BorrarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619ef6c9c93f53_56556999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9bb3ae80a0df7902003fd0bef90ef57f9c20faf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\BorrarProducto.tpl',
      1 => 1637807798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ef6c9c93f53_56556999 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lista_producto']->value, 'productos');
$_smarty_tpl->tpl_vars['productos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productos']->value) {
$_smarty_tpl->tpl_vars['productos']->do_else = false;
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['productos']->value['Nombre'];?>
</td>
            <td> <a href="?Controller=Inventario&Method=BorrarP&idPRODUCTO=<?php echo $_smarty_tpl->tpl_vars['productos']->value['idPRODUCTO'];?>
 ">Borrar</a> </td>
         </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
        </tbody>
      </table>
    
   <?php }?>


  </div><?php }
}
