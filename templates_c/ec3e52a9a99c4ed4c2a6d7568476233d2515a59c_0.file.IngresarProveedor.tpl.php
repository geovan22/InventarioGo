<?php
/* Smarty version 3.1.40, created on 2021-11-19 02:03:13
  from 'C:\xampp\htdocs\InventarioGo\templates\Inventario\IngresarProveedor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6196f7d1ab0199_41369095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3e52a9a99c4ed4c2a6d7568476233d2515a59c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Inventario\\IngresarProveedor.tpl',
      1 => 1637283789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6196f7d1ab0199_41369095 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <form  class="col s10" method="get" action="?Controller=Inventario&Method=IngresoCategoria">
      <div class="row">
      <h1>Ingresar Proveedores</h1>
      <div class="input-field col s7">
        <select class="browser-default">
            <option value="" disabled selected>Selecionar Producto</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
         </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="marca" placeholder="Nombre Marca" id="marca" type="text" class="validate" required="">
          <label for="marca">Nombre</label>
        </div>
        <div class="input-field col s6 ">
          <i class="material-icons prefix">border_color</i>
          <input name="Descripcion" placeholder="Descripcion" id="descr" type="text" class="validate" required="">
          <label for="descr">Descripcion</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">border_color</i>
          <input name="Nit" placeholder="Nit" id="nit" type="text" class="validate" required="">
          <label for="nit">NIT</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="Correo" placeholder="Correo" id="correo" type="text" class="validate" required="">
          <label for="correo">Correo</label>
        </div>
      </div>
     <div class="input-field col s8">
         <input  class="waves-effect waves-light btn" type="submit" value="Ingresar" />
        </div>
    </form>
  </div>
<?php }
}
