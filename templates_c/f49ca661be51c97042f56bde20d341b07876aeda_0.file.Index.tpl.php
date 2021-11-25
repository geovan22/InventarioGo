<?php
/* Smarty version 3.1.40, created on 2021-11-25 03:29:07
  from 'C:\xampp\htdocs\InventarioGo\templates\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619ef4f34fa240_67684166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f49ca661be51c97042f56bde20d341b07876aeda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Index.tpl',
      1 => 1636686521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_619ef4f34fa240_67684166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
       <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['Carpeta']->value)."/".((string)$_smarty_tpl->tpl_vars['Vista']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <?php }
}
