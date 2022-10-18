{include file="header.tpl"}

<div class="container">
  <h1>Editar <span class="badge bg-secondary">Pelicula</span></h1>
  <form method="post" action="updateMovie" enctype="multipart/form-data">
    <div class="input-group mb-2">
      <span class="input-group-text">Nombre</span>
      <input type="text" class="form-control" name="title" id="title" aria-label="Amount (to the nearest dollar)" value="{$title}" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Año</span>
      <input type="text" class="form-control" name="year" id="year" aria-label="Amount (to the nearest dollar)" value="{$year_movie}" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Productor</span>
      <input type="text" class="form-control" name="producer" id="producer" aria-label="Amount (to the nearest dollar)" value="{$producer}" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Sinopsis</span>
      <input type="text" class="form-control" name="synopsis" id="synopsis" aria-label="Amount (to the nearest dollar)" value="{$synopsis}" required>
    </div>

    <div class="input-group mb-2">
      <span class="input-group-text">Duracion (min)</span>
      <input type="number" class="form-control" name="duration" id="duration" aria-label="Amount (to the nearest dollar)" value="{$duration}" required>
    </div>
    <style>
        .hidden{
            visibility: hidden;
            display: none;
        }
    </style>
    <input type="number" class="hidden" name="id" id="id" value="{$id}" required>

    <div class="input-group mb-2">
      <input type="file" class="form-control" name="image" id="image" value="{$url_image}" required>
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
    <button type="submit" class="btn btn-primary mb-3">Modificar</button>
  </form>
</div>