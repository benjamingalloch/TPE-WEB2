{include file="header.tpl"}

<div class="container">
  <h1>Agregar <span class="badge bg-secondary">Pelicula</span></h1>
  <form method="post" action="addMovie" enctype="multipart/form-data">
    <div class="input-group mb-2">
      <span class="input-group-text">Nombre</span>
      <input type="text" class="form-control" name="title" id="title" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Año</span>
      <input type="text" class="form-control" name="year" id="year" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Productor</span>
      <input type="text" class="form-control" name="producer" id="producer" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Sinopsis</span>
      <input type="text" class="form-control" name="synopsis" id="synopsis" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Duracion (min)</span>
      <input type="number" class="form-control" name="duration" id="duration" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <input type="file" class="form-control" name="image" id="image" required>
    </div>

    <div class="input-group mb-2">
      <label class="input-group-text" for="inputGroupSelect01">Genero</label>
      <select class="form-select" id="inputGroupSelect01" name="id_genre_fk">
        <option selected>Seleccionar...</option>
        {foreach from=$genres item=genre}
          <option value="{$genre->id}" id="{$genre->id}">{$genre->name_gen}</option>
        {/foreach}
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Agregar</button>
  </form>
</div>

<div class="container">
  <h1>Agregar <span class="badge bg-secondary">Genero</span></h1>
  <form method="post" action="addGenre" enctype="multipart/form-data">
    <div class="input-group mb-2">
      <span class="input-group-text">Nombre</span>
      <input type="text" class="form-control" name="name_gen" id="name_gen" aria-label="Amount (to the nearest dollar)" required>
    </div>

    <div class="input-group mb-2">
      <input type="file" class="form-control" name="image_genre" id="image_genre" required>
    </div>

    <button type="submit" class="btn btn-primary mb-3">Agregar</button>
  </form>
</div>

<div class="container">
  <div class="accordion">
    {foreach from=$genres item=genre}
      <div class="accordion-item">
        <h2 class="accordion-header" id="{$genre->id}">
          <div class="d-flex p-1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{$genre->name_gen}" aria-expanded="true" aria-controls="{$genre->name_gen}">
            {$genre->name_gen} 
            </button>
            <a href="deleteGenre/{$genre->id}"><button type="button" class="btn btn-danger">Eliminar</button></a>
          </div>
          
        </h2>
        <div id="{$genre->name_gen}" class="accordion-collapse collapse" aria-labelledby="{$genre->id}" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ul class="list-group">
              {foreach from=$movies item=movie}
                {if $movie->id_genre_fk == $genre->id}
                  <div class="container d-flex p-1 ">
                    <li class="list-group-item">{$movie->title}</li>
                    <a href="editMovie/{$movie->id}" class="p-1"><button  type="button" class="btn btn-danger">Editar</button></a>
                    <a href="deleteMovie/{$movie->id}" class="p-1"><button type="button" class="btn btn-danger">Eliminar</button></a>
                  </div>
                {/if}
              {/foreach}
            </ul>
          </div>
        </div>
      </div>
    {/foreach}
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
