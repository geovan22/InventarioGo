<?php
/* Smarty version 3.1.40, created on 2021-11-12 02:19:09
  from 'C:\xampp\htdocs\InventarioGo\templates\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_618dc10db9f119_56668170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f49ca661be51c97042f56bde20d341b07876aeda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Index.tpl',
      1 => 1636679945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_618dc10db9f119_56668170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
       <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['Carpeta']->value)."/".((string)$_smarty_tpl->tpl_vars['Vista']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <?php }
}
