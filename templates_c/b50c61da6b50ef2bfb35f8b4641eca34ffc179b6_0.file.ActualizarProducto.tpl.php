<?php
/* Smarty version 3.1.40, created on 2021-11-23 01:55:52
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\ActualizarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619c3c18e0a556_79204368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b50c61da6b50ef2bfb35f8b4641eca34ffc179b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\ActualizarProducto.tpl',
      1 => 1637628946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c3c18e0a556_79204368 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=IngresoProducto">
      <div class="row">
      <h1>Ingreso Producto</h1>
    
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="producto" placeholder="Nombre" id="prod" type="text" class="validate" required="">
          <label for="prod">Nombre Producto</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="Descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required="">
          <label for="descr">Descripcion</label>
        </div>


        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="precio" placeholder="Precio" id="precio" type="number" class="validate" required="">
          <label for="precio">Precio</label>
        </div>

        
             <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="stock" placeholder="Stock" id="stock" type="number" class="validate" required="">
          <label for="stock">Stock</label>
        </div>

          <div class="input-field col s7">
        <select class="browser-default">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value, 'marcas');
$_smarty_tpl->tpl_vars['marcas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marcas']->value) {
$_smarty_tpl->tpl_vars['marcas']->do_else = false;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['marcas']->value['idMarca'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['marcas']->value['Nombre'];?>

              </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
         </div>
        
      </div>
     <div class="input-field col s8">
         <input  class="waves-effect waves-light btn" type="submit" value="Ingresar" />
        </div>
    </form>
  </div>

<?php echo '<script'; ?>
 type="text/javascript">
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
<?php echo '</script'; ?>
><?php }
}
