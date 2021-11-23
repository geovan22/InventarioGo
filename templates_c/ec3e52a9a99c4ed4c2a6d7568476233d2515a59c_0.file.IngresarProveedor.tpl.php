<?php
/* Smarty version 3.1.40, created on 2021-11-23 01:20:54
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\IngresarProveedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619c33e6be79d4_42489621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3e52a9a99c4ed4c2a6d7568476233d2515a59c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\IngresarProveedor.tpl',
      1 => 1637626837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c33e6be79d4_42489621 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <form  class="col s10" method="get" action="?Controller=Inventario&Method=IngresoCategoria">
      <div class="row">
      <h1>Ingresar Proveedores</h1>
       <div class="input-field col s7">
        <select class="browser-default">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m']->value, 'marcas');
$_smarty_tpl->tpl_vars['marcas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['marcas']->value) {
$_smarty_tpl->tpl_vars['marcas']->do_else = false;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['marcas']->value['idPRODUCTO'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['marcas']->value['Nombre'];?>

              </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php echo '<script'; ?>
 type="text/javascript">
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
<?php echo '</script'; ?>
><?php }
}
