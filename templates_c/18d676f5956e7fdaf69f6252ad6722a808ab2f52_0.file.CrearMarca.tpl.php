<?php
/* Smarty version 3.1.40, created on 2021-11-19 02:20:02
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\CrearMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6196fbc289f5d4_51123961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d676f5956e7fdaf69f6252ad6722a808ab2f52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\CrearMarca.tpl',
      1 => 1637284781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6196fbc289f5d4_51123961 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <form  class="col s10" method="post" action="?Controller=Inventario&Method=IngresoMarca">
      <div class="row">
       <h1>Ingreso Marca</h1>
       <div class="input-field col s6">
          <i class="material-icons prefix">local_library</i>
          <input name="marca" placeholder="Nombre Marca" id="marca" type="text" class="validate" required="">
          <label for="marca">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="descr" placeholder="Descripcion" id="descr" type="text" class="validate" required=""">
          <label for="descr">Descripcion</label>
        </div>
      </div>
     <div class="input-field col s8">
                    <input  class="waves-effect waves-light btn" type="submit" value="Ingresar" />
        </div>
    </form>
  </div><?php }
}
