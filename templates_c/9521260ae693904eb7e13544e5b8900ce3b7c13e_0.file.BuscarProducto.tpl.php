<?php
/* Smarty version 3.1.40, created on 2021-11-23 01:55:01
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\BuscarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619c3be53b1922_42604410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9521260ae693904eb7e13544e5b8900ce3b7c13e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\BuscarProducto.tpl',
      1 => 1637628897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c3be53b1922_42604410 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=IngresoProducto">
      <div class="row">
      <h1>Buscar Producto</h1>
    
        <div class="input-field col s7">
          <i class="material-icons prefix">account_circle</i>
          <input name="producto" placeholder="Nombre" id="prod" type="text" class="validate" required="">
          <label for="prod">Nombre Producto</label>
        </div>

     <div class="input-field col s4">
         <input  class="waves-effect waves-light btn" type="submit" value="Buscar" />
        </div>
        <div class="input-field col s4">
         <input  href="?Controller=RutaVista&Method=ActualizarProducto" class="waves-effect waves-light btn" type="submit" value="Actualizar" />
      
        
        </div>
        
    </form>
  </div><?php }
}
