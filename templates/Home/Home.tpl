<div class="container">
     <div class="row">
        <div class="col s12">
            {if isset($alerta)}
                <div class="card-panel orange lighten-2 center-align">
                    {$alerta}
                </div>
            {else}
                <div class="card-panel teal lighten-2 center-align">
                    INGRESO
                </div>
            {/if}
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
</div>