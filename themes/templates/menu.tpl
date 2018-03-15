<ul>
{foreach from=$menu item=page key=id name=menu}{if $page.show=="yes"}<li class="{$id}{if $page.active} active{/if}{if $smarty.foreach.menu.first} first{/if}{if $smarty.foreach.menu.last} last{/if}" onclick="location.href='{$page.link}'"></li>{/if}{/foreach}
</ul>
