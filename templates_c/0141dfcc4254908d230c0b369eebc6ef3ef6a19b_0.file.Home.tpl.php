<?php
/* Smarty version 3.1.40, created on 2021-11-25 03:36:51
  from 'C:\xampp\htdocs\InventarioGo\templates\Home\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_619ef6c3b8a1c6_80270906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0141dfcc4254908d230c0b369eebc6ef3ef6a19b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\InventarioGo\\templates\\Home\\Home.tpl',
      1 => 1636686521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619ef6c3b8a1c6_80270906 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
     <div class="row">
        <div class="col s12">
            <?php if ((isset($_smarty_tpl->tpl_vars['alerta']->value))) {?>
                <div class="card-panel orange lighten-2 center-align">
                    <?php echo $_smarty_tpl->tpl_vars['alerta']->value;?>

                </div>
            <?php } else { ?>
                <div class="card-panel teal lighten-2 center-align">
                    INGRESO
                </div>
            <?php }?>
        </div>
     </div>
     
     <div class="row">
        <div class="col s12">
            <form method="post" action="?Controller=Usuario&Method=Login">
                <div class="input-field col s8">
                  <input name="user" placeholder="Usuario" id="user" type="text" class="validate" required=""/>
                  <label for="user">User</label>
                </div>
                
                <div class="input-field col s8">
                  <input name="pass" placeholder="Password" id="pass" type="password" class="validate" required=""/>
                  <label for="pass">Password</label>
                </div>
                
                 <div class="input-field col s8">
                    <input  class="waves-effect waves-light btn" type="submit" value="Registrar" />
                </div>
            </form>
        </div>
     </div>
</div><?php }
}
