{include file='Navs/NavLateral.tpl'}

<div class="col s10">
    {if isset($Invent)}
        {include file="Inventario/$Invent.tpl"}
    {else}
        <img class="responsive-img" src="Recursos/descargar.jpg"/>
    {/if}
</div>