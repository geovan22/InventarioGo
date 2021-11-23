<?php
/* Smarty version 3.1.40, created on 2021-11-23 02:55:04
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\IngresarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619c49f890da10_54673939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3619367726c54ba8adfe8e9400cd9d8571476805' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\IngresarCategoria.tpl',
      1 => 1637632446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c49f890da10_54673939 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=IngresoCategoria">
      <div class="row">
      <h1>Crear Categoria</h1>

       <div class="input-field col s7">
          <select name="nombre" class="browser-default">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['idPRODUCTO'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['producto']->value['Nombre'];?>

              </option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
         </div>
         
       <div class="input-field col s6">
          <i class="material-icons prefix">local_library</i>
          <input name="categoria" placeholder="Categoria" id="categoria" type="text" class="validate" required="">
          <label for="categoria">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required=""">
          <label for="descr">Descripcion</label>
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
