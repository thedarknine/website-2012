<div id="Title"><img src="resources/titles/formation.png" alt="Formation" /></div>

<div id="Formation"> 
{foreach from=$data item=formation key=id name=data}
    <div class="Picto">
        <img src="resources/formation/{$formation.picto}" alt=" " />
    </div>
    <div class="Description{if !$smarty.foreach.data.first} separate{/if}">
        <h3>{$formation.label} {$formation.note}</h3>
        <h4>{$formation.option}</h4>
        <p>{$formation.university}</p>
    </div>
    <div class="cleaner"></div>
{/foreach}
</div>