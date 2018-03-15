<div id="Title"><img src="resources/titles/projets.png" alt="Projets" /></div>

<div id="Projects">
{foreach from=$data item=projet key=id name=data}
    <div class="Picto">
        <img src="resources/projets/{$projet.picto}" alt=" " />
    </div>
    <div class="Description{if !$smarty.foreach.data.first} separate{/if}">
        <h3>{$projet.title}</h3>
        <h4>{$projet.period}</h4>
        <p>{$projet.description}</p>
    </div>
    <div class="cleaner"></div> 
{/foreach}
</div> 