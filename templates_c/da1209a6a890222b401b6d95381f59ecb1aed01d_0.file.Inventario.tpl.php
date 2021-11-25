<?php
/* Smarty version 3.1.40, created on 2021-11-25 03:29:07
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\Inventario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619ef4f3637807_11871761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da1209a6a890222b401b6d95381f59ecb1aed01d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\Inventario.tpl',
      1 => 1637807145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Navs/NavLateral.tpl' => 1,
    'file:Inventario/".((string)$_smarty_tpl->tpl_vars[\'Invent\']->value).".tpl' => 1,
  ),
),false)) {
function content_619ef4f3637807_11871761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Navs/NavLateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="col s10">
    <?php if ((isset($_smarty_tpl->tpl_vars['Invent']->value))) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:Inventario/".((string)$_smarty_tpl->tpl_vars['Invent']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <img class="responsive-img" src="Recursos/descargar.jpg"/>
    <?php }?>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
<?php echo '</script'; ?>
><?php }
}
