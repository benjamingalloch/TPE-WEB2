{include file="header.tpl"}

    <div class="container-md d-flex flex-row flex-wrap">
        {foreach from=$genres item=genre}
            <div class="card text-bg-dark mb-3" style="width: 18rem;">
                <img src="{$genre->url_image}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$genre->name_gen}</h5>
                    <a href="genre/{$genre->name_gen}" class="btn btn-primary">Ver</a>
                </div>
            </div> 
        {/foreach}
            <div class="card text-bg-dark mb-3" style="width: 18rem;">
                <img src="images/genres/todos_card.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Todos</h5>
                    <p class="card-text">{$genre->description}</p>
                    <a href="todos" class="btn btn-primary">Ir</a>
                </div>
            </div>
    </div>
    
{include file="footer.tpl"}