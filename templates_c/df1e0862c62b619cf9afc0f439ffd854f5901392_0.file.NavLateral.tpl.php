<?php
/* Smarty version 3.1.40, created on 2021-11-25 03:29:07
  from 'C:\xampp\htdocs\InventarioGo\templates\Navs\NavLateral.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619ef4f36b9c02_39986480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1e0862c62b619cf9afc0f439ffd854f5901392' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Navs\\NavLateral.tpl',
      1 => 1637629734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ef4f36b9c02_39986480 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col s2">
     <div class="collection">
        <a href="?Controller=RutaVista&Method=CrearMarca" class="collection-item">Ingresar Marca</a>
        <a href="?Controller=RutaVista&Method=CrearCategoria" class="collection-item">Ingresar Categoria</a>
        <a href="?Controller=RutaVista&Method=IngresarProveedor" class="collection-item">Ingresar Proveedor </a>
        <a href="?Controller=RutaVista&Method=IngresarProducto" class="collection-item">Ingresar Producto</a>
        <a href="?Controller=RutaVista&Method=BuscarProducto" class="collection-item">Buscar Producto</a>
        <a href="?Controller=RutaVista&Method=BorrarProducto"  class="collection-item">Borrar Producto</a>
        <a href="?Controller=RutaVista&Method=MostrarProducto"  class="collection-item">Mostrar Productos</a>
      </div>
</div><?php }
}
