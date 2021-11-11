<?php
/* Smarty version 3.1.40, created on 2021-11-11 03:37:03
  from 'C:\xampp\htdocs\InventarioGo\templates\Error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_618c81cf266398_95560909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eee311dd3482202111a189e0621cab5a1138d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Error.tpl',
      1 => 1636598218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_618c81cf266398_95560909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
        <div class="container">
             <h1>Error</h1>
             
             <a href="?Controller=Home&Method=Index">Ir a Index</a>
          
        </div>
        
 <?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
    <?php }
}
