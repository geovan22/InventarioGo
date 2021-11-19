<?php
/* Smarty version 3.1.40, created on 2021-11-19 01:49:17
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\CrearCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6196f48dc4d001_29680964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69dde83d43acb2a4546c87c03f3239a2435b266b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\CrearCategoria.tpl',
      1 => 1637282574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6196f48dc4d001_29680964 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <form  class="col s10" method="get" action="?Controller=Inventario&Method=IngresoCategoria">
      <div class="row">
      <h1>Crear Categoria</h1>
       <div class="input-field col s6">
          <i class="material-icons prefix">local_library</i>
          <input name="categoria" placeholder="Categoria" id="categoria" type="text" class="validate" required="">
          <label for="categoria">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="Descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required=""">
          <label for="descr">Descripcion</label>
        </div>
      </div>
     <div class="input-field col s8">
         <input  class="waves-effect waves-light btn" type="submit" value="Ingresar" />
        </div>
    </form>
  </div><?php }
}
