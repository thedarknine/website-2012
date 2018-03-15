<div id="Title"><img src="resources/titles/competences.png" alt="Competences" /></div>

<div id="Competences">   
{foreach from=$data item=competence key=id name=data}
    <div class="Picto">
        <img src="resources/competences/{$competence.picto}" alt="{$competence.title}" />
    </div>
    <div class="Description{if !$smarty.foreach.data.first} separate{/if}">
        {$competence.details}
    </div>
    <div class="cleaner"></div>
{/foreach}
</div>