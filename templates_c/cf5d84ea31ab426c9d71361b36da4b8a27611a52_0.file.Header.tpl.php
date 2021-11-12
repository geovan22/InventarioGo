<?php
/* Smarty version 3.1.40, created on 2021-11-12 03:51:33
  from 'C:\xampp\htdocs\InventarioGo\templates\Cabeceras\Header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_618dd6b57d1c86_30062348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5d84ea31ab426c9d71361b36da4b8a27611a52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Cabeceras\\Header.tpl',
      1 => 1636685490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618dd6b57d1c86_30062348 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
      <?php } else { ?>
        <title>Home</title>
      <?php }?>
      
    </head>
    <body>
    <div class="row">
    
    <?php if ((isset($_smarty_tpl->tpl_vars['Nombre']->value))) {?>
          <nav class="col s12">
            
            <div class="nav-wrapper">
              <a href="#" class="brand-logo">Nombre: <?php echo $_smarty_tpl->tpl_vars['Nombre']->value;?>
</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="">Salir</a></li>
              </ul>
            </div>
          </nav>
    <?php }?>
    <?php }
}
