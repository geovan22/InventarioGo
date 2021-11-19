<?php
/* Smarty version 3.1.40, created on 2021-11-19 03:42:39
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\MostrarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61970f1f394b06_69488178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d5a1a69a8ba5686956e2f67de38edc7e268fa43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\MostrarProducto.tpl',
      1 => 1637289688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61970f1f394b06_69488178 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Mostar Producto</h1>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'productos');
$_smarty_tpl->tpl_vars['productos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['productos']->value) {
$_smarty_tpl->tpl_vars['productos']->do_else = false;
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['productos']->value['Nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['productos']->value['Descricion'];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['productos']->value['Precio'];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['productos']->value['Stock'];?>
</td>
          </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
        </tbody>
      </table><?php }
}
