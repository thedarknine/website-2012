<div id="Title"><img src="resources/titles/experience.png" alt="Experience" /></div>

<div id="Experience">
{foreach from=$data item=experience key=id name=data}
    <div class="Picto">
        <img src="resources/experience/{$experience.picto}" alt=" " />
    </div>
    <div class="Description{if !$smarty.foreach.data.first} separate{/if}">
        <h3>{$experience.company}</h3>
        <h4>{$experience.period}</h4>
        <p>{$experience.description}</p>
    </div>
    <div class="cleaner"></div> 
{/foreach}
</div>