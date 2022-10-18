{include file="header.tpl"}

    <h1>{$genre}</h1>
    <ul>
        {foreach from=$movies item=pelicula}
            <li><a href="movie/{$pelicula->title}">{$pelicula->title}</a></li>
        {/foreach}  
    </ul>

{include file="footer.tpl"}