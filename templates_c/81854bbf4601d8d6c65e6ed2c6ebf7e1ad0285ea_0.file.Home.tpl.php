<?php
/* Smarty version 3.1.40, created on 2021-11-12 01:37:32
  from 'C:\xampp\htdocs\InventarioGo\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_618db74c767165_47082803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81854bbf4601d8d6c65e6ed2c6ebf7e1ad0285ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Home.tpl',
      1 => 1636677450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/".((string)$_smarty_tpl->tpl_vars[\'nombre\']->value).".tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_618db74c767165_47082803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('nombre', 'Header');?>

<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/".((string)$_smarty_tpl->tpl_vars['nombre']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        
        <div class="container">
             <h1>Home</h1>
          
            <a href="?Controller=Home&Method=Error">Ir a error</a>
        </div>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabeceras/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
     <?php }
}
